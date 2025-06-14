<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

use Helpers\IblockHelper;

$APPLICATION->SetTitle("Личный кабинет");
?>
<section class="guaranteesHead">
	<div class="guaranteesHead__container">
		<? $APPLICATION->IncludeComponent(
			"bitrix:breadcrumb",
			"breadcrumbs_line",
			array(
				"PATH" => "",
				"SITE_ID" => "h1",
				"START_FROM" => "0"
			)
		); ?>
		<h1 class="guaranteesHead__title"><?php $APPLICATION->ShowTitle(false); ?></h1>
	</div>
</section>

<div class="container with-sidebar">
	<?php
	$APPLICATION->IncludeComponent(
		"bitrix:menu",
		"personal",
		array(
			"COMPONENT_TEMPLATE" => "",
			"ROOT_MENU_TYPE" => "sidebar",
			"MENU_CACHE_TYPE" => "N",
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"MENU_CACHE_GET_VARS" => "",
			"MAX_LEVEL" => "1",
			"CHILD_MENU_TYPE" => "left",
			"USE_EXT" => "N",
			"DELAY" => "N",
			"ALLOW_MULTI_SELECT" => "N",
		),
		false
	); ?>
	<?php
	$APPLICATION->IncludeComponent(
		"addamant:personal.reviews",
		"",
		array(
			"CATALOG_ID" => IblockHelper::getIdByCode("hutMainCatalog"),
			'OFFERS_CATALOG_ID' => IblockHelper::getIdByCode("hutMainOffersCatalog"),
		)
	);
	?>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>