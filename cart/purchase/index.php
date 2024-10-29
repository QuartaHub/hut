<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

global $APPLICATION;
$APPLICATION->SetTitle("Оформление заказа"); ?><div class="container">
	 <?php $APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"breadcrumbs_line",
	Array(
		"PATH" => "",
		"SITE_ID" => "h1",
		"START_FROM" => "0"
	)
);?>
	<h1><?=$APPLICATION->GetTitle()?></h1>
	<div>
		 <?php $APPLICATION->IncludeComponent(
	"bitrix:sale.order.ajax", 
	"hut_order", 
	array(
		"ACTION_VARIABLE" => "soa-action",
		"ADDITIONAL_PICT_PROP_16" => "-",
		"ADDITIONAL_PICT_PROP_26" => "-",
		"ADDITIONAL_PICT_PROP_27" => "-",
		"ADDITIONAL_PICT_PROP_45" => "-",
		"ADDITIONAL_PICT_PROP_46" => "-",
		"ADDITIONAL_PICT_PROP_84" => "-",
		"ADDITIONAL_PICT_PROP_85" => "-",
		"ADDITIONAL_PICT_PROP_88" => "-",
		"ADDITIONAL_PICT_PROP_89" => "-",
		"ALLOW_APPEND_ORDER" => "Y",
		"ALLOW_AUTO_REGISTER" => "N",
		"ALLOW_NEW_PROFILE" => "N",
		"ALLOW_USER_PROFILES" => "N",
		"BASKET_IMAGES_SCALING" => "adaptive",
		"BASKET_POSITION" => "after",
		"COMPATIBLE_MODE" => "Y",
		"DELIVERIES_PER_PAGE" => "9",
		"DELIVERY_FADE_EXTRA_SERVICES" => "Y",
		"DELIVERY_NO_AJAX" => "Y",
		"DELIVERY_NO_SESSION" => "Y",
		"DELIVERY_TO_PAYSYSTEM" => "d2p",
		"DISABLE_BASKET_REDIRECT" => "N",
		"EMPTY_BASKET_HINT_PATH" => "/catalog/",
		"HIDE_ORDER_DESCRIPTION" => "N",
		"ONLY_FULL_PAY_FROM_ACCOUNT" => "N",
		"PATH_TO_AUTH" => "/auth/",
		"PATH_TO_BASKET" => "/cart/",
		"PATH_TO_PAYMENT" => "payment.php",
		"PATH_TO_PERSONAL" => "index.php",
		"PAY_FROM_ACCOUNT" => "N",
		"PAY_SYSTEMS_PER_PAGE" => "9",
		"PICKUPS_PER_PAGE" => "5",
		"PICKUP_MAP_TYPE" => "yandex",
		"PRODUCT_COLUMNS_HIDDEN" => array(
		),
		"PRODUCT_COLUMNS_VISIBLE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "DETAIL_PICTURE",
			2 => "PROPS",
			3 => "PRICE_FORMATED",
			4 => "PROPERTY_SIZE",
			5 => "PROPERTY_COLOR",
			6 => "PROPERTY_COLOR_CODE",
			7 => "PROPERTY_MATERIAL",
			8 => "PROPERTY_CLOTHES_SIZE",
		),
		"PROPS_FADE_LIST_1" => array(
			0 => "1",
			1 => "2",
			2 => "3",
		),
		"PROPS_FADE_LIST_2" => array(
		),
		"SEND_NEW_USER_NOTIFY" => "Y",
		"SERVICES_IMAGES_SCALING" => "adaptive",
		"SET_TITLE" => "Y",
		"SHOW_BASKET_HEADERS" => "Y",
		"SHOW_COUPONS" => "Y",
		"SHOW_COUPONS_BASKET" => "Y",
		"SHOW_COUPONS_DELIVERY" => "Y",
		"SHOW_COUPONS_PAY_SYSTEM" => "Y",
		"SHOW_DELIVERY_INFO_NAME" => "Y",
		"SHOW_DELIVERY_LIST_NAMES" => "Y",
		"SHOW_DELIVERY_PARENT_NAMES" => "N",
		"SHOW_MAP_FOR_DELIVERIES" => array(
		),
		"SHOW_MAP_IN_PROPS" => "Y",
		"SHOW_NEAREST_PICKUP" => "Y",
		"SHOW_NOT_CALCULATED_DELIVERIES" => "L",
		"SHOW_ORDER_BUTTON" => "final_step",
		"SHOW_PAY_SYSTEM_INFO_NAME" => "Y",
		"SHOW_PAY_SYSTEM_LIST_NAMES" => "Y",
		"SHOW_PICKUP_MAP" => "Y",
		"SHOW_STORES_IMAGES" => "Y",
		"SHOW_TOTAL_ORDER_BUTTON" => "N",
		"SHOW_VAT_PRICE" => "Y",
		"SKIP_USELESS_BLOCK" => "N",
		"SPOT_LOCATION_BY_GEOIP" => "Y",
		"TEMPLATE_LOCATION" => "popup",
		"TEMPLATE_THEME" => "site",
		"USER_CONSENT" => "Y",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_CUSTOM_ADDITIONAL_MESSAGES" => "N",
		"USE_CUSTOM_ERROR_MESSAGES" => "N",
		"USE_CUSTOM_MAIN_MESSAGES" => "N",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_PHONE_NORMALIZATION" => "Y",
		"USE_PRELOAD" => "Y",
		"USE_PREPAYMENT" => "N",
		"USE_YM_GOALS" => "N",
		"COMPONENT_TEMPLATE" => "hut_order"
	),
	false
);?>
	</div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>