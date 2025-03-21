<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Helpers\IblockHelper;

global $APPLICATION;
$aMenuLinksExt = array();

if (CModule::IncludeModule('iblock')) {
    $arFilter = array(
        "SITE_ID" => SITE_ID,
        "ID" => IblockHelper::getIdByCode("hutMainCatalog"),
    );

    $dbIBlock = CIBlock::GetList(array('SORT' => 'ASC', 'ID' => 'ASC'), $arFilter);
    $dbIBlock = new CIBlockResult($dbIBlock);

    if ($arIBlock = $dbIBlock->GetNext()) {
        if (defined("BX_COMP_MANAGED_CACHE"))
            $GLOBALS["CACHE_MANAGER"]->RegisterTag("iblock_id_" . $arIBlock["ID"]);

        if ($arIBlock["ACTIVE"] == "Y") {
            $aMenuLinksExt = $APPLICATION->IncludeComponent("custom:menu.sections", "", array(
                "IS_SEF" => "Y",
                "SEF_BASE_URL" => "",
                "SECTION_PAGE_URL" => $arIBlock['SECTION_PAGE_URL'],
                "DETAIL_PAGE_URL" => $arIBlock['DETAIL_PAGE_URL'],
                "IBLOCK_TYPE" => $arIBlock['IBLOCK_TYPE_ID'],
                "IBLOCK_ID" => $arIBlock['ID'],
                "DEPTH_LEVEL" => "3",
                "CACHE_TYPE" => "N",
            ), false, array('HIDE_ICONS' => 'Y'));
        }
    }

    if (defined("BX_COMP_MANAGED_CACHE"))
        $GLOBALS["CACHE_MANAGER"]->RegisterTag("iblock_id_new");
}

$aMenuLinksExt[] = [
    0 => 'Весь каталог',
    1 => '/catalog/',
    2 => [
        0 => '/catalog/'
    ],
    3 => [
        'FROM_IBLOCK' => 0,
        'IS_PARENT' => 0,
        'DEPTH_LEVEL' => 1,
        'NOT_SHOW_IN_MENU' => 0,
    ]
];

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
