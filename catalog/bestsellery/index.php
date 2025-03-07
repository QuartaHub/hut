<?php

use Helpers\IblockHelper;

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

global $APPLICATION;

/**
 * @var array $arParams
 */

$APPLICATION->SetTitle("Бестселлеры"); ?>
<?php $APPLICATION->IncludeComponent(
    "bitrix:breadcrumb",
    "breadcrumb",
    array(
        "PATH" => "",
        "SITE_ID" => "h1",
        "START_FROM" => "0"
    )
);
?>
    <div id="filter_modal" class="modal">
        <?php
            $GLOBALS['bestselleryPreFilter'] = ['PROPERTY_BESCELLER_VALUE' => 'Y'];
        ?>
        <?php $APPLICATION->IncludeComponent(
            "custom:catalog.smart.filter",
            "filter",
            array(
                "IBLOCK_TYPE" => '1c_catalog',
                "IBLOCK_ID" => IblockHelper::getIdByCode("hutMainCatalog"),
                "SECTION_ID" => '',
                "FILTER_NAME" => 'arrBestselleryFilter',
                "PRICE_CODE" => 'BASE',
                "CACHE_TYPE" => 'A',
                "CACHE_TIME" => '36000',
                "CACHE_GROUPS" => 'N',
                "SAVE_IN_SESSION" => "N",
                "FILTER_VIEW_MODE" => 'VERTICAL',
                "XML_EXPORT" => "N",
                "SECTION_TITLE" => "NAME",
                "SECTION_DESCRIPTION" => "DESCRIPTION",
                'HIDE_NOT_AVAILABLE' => 'L',
                "TEMPLATE_THEME" => 'blue',
                'CONVERT_CURRENCY' => 'N',
                'CURRENCY_ID' => '',
                "SEF_MODE" => 'N',
                "SEF_RULE" => '/catalog/bestsellery/#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/',
                "SMART_FILTER_PATH" => '',
                "PAGER_PARAMS_NAME" => '',
                "INSTANT_RELOAD" => '',
                "DISPLAY_ELEMENT_COUNT" => 'N',
                "PREFILTER_NAME" => "bestselleryPreFilter",
            ),
            false,
            array('HIDE_ICONS' => 'Y')
        ); ?>
    </div>
    <div class="container">
        <h1 class="catalog__sectoin-title"><?= $APPLICATION->GetTitle() ?></h1>
        <div class="catalog__buttons" style="padding: 16px 0; margin-top: 16px; justify-content: end;">
            <button type="button" class="button filter-toggler">
                <span>Фильтры</span>
                <span class="filter-icon"><?= buildSVG('filter', SITE_TEMPLATE_PATH . ICON_PATH) ?></span>
            </button>
            <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/include/catalog/sort.php') ?>
        </div>
        <?php $APPLICATION->IncludeComponent(
            "bitrix:catalog.section",
            "catalog",
            array(
                "ACTION_VARIABLE" => "action",
                "ADD_PICT_PROP" => "-",
                "ADD_PROPERTIES_TO_BASKET" => "Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "ADD_TO_BASKET_ACTION" => "ADD",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "BACKGROUND_IMAGE" => "-",
                "BASKET_URL" => "/personal/basket.php",
                "BROWSER_TITLE" => "-",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "N",
                "COMPATIBLE_MODE" => "N",
                "CONVERT_CURRENCY" => "N",
                "CUSTOM_FILTER" => "",
                "DETAIL_URL" => "",
                "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_COMPARE" => "N",
                "DISPLAY_TOP_PAGER" => "N",
                "ELEMENT_SORT_FIELD" => $arParams["ELEMENT_SORT_FIELD"],
                "ELEMENT_SORT_FIELD2" => $arParams["ELEMENT_SORT_ORDER"],
                "ELEMENT_SORT_ORDER" => "asc",
                "ELEMENT_SORT_ORDER2" => "desc",
                "ENLARGE_PRODUCT" => "STRICT",
                "FILTER_NAME" => "arrBestselleryFilter",
                "HIDE_NOT_AVAILABLE" => "N",
                "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                "IBLOCK_ID" => IblockHelper::getIdByCode("hutMainCatalog"),
                "IBLOCK_TYPE" => "1c_catalog",
                "INCLUDE_SUBSECTIONS" => "Y",
                "LABEL_PROP" => array(
                    0 => "TYPE",
                ),
                "LAZY_LOAD" => "N",
                "LINE_ELEMENT_COUNT" => "3",
                "LOAD_ON_SCROLL" => "N",
                "MESSAGE_404" => "",
                "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                "MESS_BTN_BUY" => "Купить",
                "MESS_BTN_DETAIL" => "Подробнее",
                "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                "MESS_BTN_SUBSCRIBE" => "Подписаться",
                "MESS_NOT_AVAILABLE" => "Нет в наличии",
                "MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "OFFERS_LIMIT" => "5",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Товары",
                "PAGE_ELEMENT_COUNT" => "200",
                "PARTIAL_PRODUCT_PROPERTIES" => "N",
                "PRICE_CODE" => array(
                    0 => "BASE",
                ),
                "PRICE_VAT_INCLUDE" => "Y",
                "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                "PRODUCT_ID_VARIABLE" => "id",
                "PRODUCT_PROPERTIES" => array(
                    0 => "TYPE",
                    1 => "SPECIALS",
                ),
                "PRODUCT_PROPS_VARIABLE" => "prop",
                "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                "PRODUCT_SUBSCRIPTION" => "Y",
                "PROPERTY_CODE" => array('*'),
                "PROPERTY_CODE_MOBILE" => array('*'),
                "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
                "RCM_TYPE" => "personal",
                "SECTION_CODE" => "",
                "SECTION_CODE_PATH" => "",
                "SECTION_ID" => "",
                "SECTION_ID_VARIABLE" => "SECTION_ID",
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array(
                    0 => "",
                    1 => "",
                ),
                "SEF_MODE" => "N",
                "SEF_RULE" => "",
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SHOW_ALL_WO_SECTION" => "Y",
                "SHOW_CLOSE_POPUP" => "N",
                "SHOW_DISCOUNT_PERCENT" => "N",
                "SHOW_FROM_SECTION" => "N",
                "SHOW_MAX_QUANTITY" => "N",
                "SHOW_OLD_PRICE" => "N",
                "SHOW_PRICE_COUNT" => "1",
                "SHOW_SLIDER" => "Y",
                "SLIDER_INTERVAL" => "3000",
                "SLIDER_PROGRESS" => "N",
                "TEMPLATE_THEME" => "blue",
                "USE_ENHANCED_ECOMMERCE" => "N",
                "USE_MAIN_ELEMENT_SECTION" => "N",
                "USE_PRICE_COUNT" => "N",
                "USE_PRODUCT_QUANTITY" => "N",
                "COMPONENT_TEMPLATE" => "catalog",
                "USE_FILTER" => "Y"
            ),
            false
        ); ?>
    </div>
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");