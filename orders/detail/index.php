<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("Личный кабинет");?>
<section class="guaranteesHead">
	<div class="guaranteesHead__container">
		<?php
			$APPLICATION->IncludeComponent(
			"bitrix:breadcrumb",
			"breadcrumbs_line",
			Array(
				"PATH" => "",
				"SITE_ID" => "h1",
				"START_FROM" => "0"
			)
		);?>
		<h1 class="guaranteesHead__title"><?php $APPLICATION->ShowTitle(false); ?></h1>
	</div>
</section>
<div class="container with-sidebar">
	<?php
		$APPLICATION->IncludeComponent(
		"bitrix:menu",
		"personal",
		Array(
			"ALLOW_MULTI_SELECT" => "N",
			"CHILD_MENU_TYPE" => "left",
			"COMPONENT_TEMPLATE" => "",
			"DELAY" => "N",
			"MAX_LEVEL" => "1",
			"MENU_CACHE_GET_VARS" => "",
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_TYPE" => "N",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"ROOT_MENU_TYPE" => "sidebar",
			"USE_EXT" => "N"
		)
	);?>
	<?php
	$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.order.detail", 
	"template", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ALLOW_INNER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CUSTOM_SELECT_PROPS" => array(
		),
		"DISALLOW_CANCEL" => "N",
		"ID" => $ID,
		"ONLY_INNER_FULL" => "N",
		"PATH_TO_CANCEL" => "",
		"PATH_TO_COPY" => "",
		"PATH_TO_LIST" => "/orders/",
		"PATH_TO_PAYMENT" => "payment.php",
		"PICTURE_HEIGHT" => "110",
		"PICTURE_RESAMPLE_TYPE" => "1",
		"PICTURE_WIDTH" => "110",
		"PROP_1" => array(
		),
		"PROP_2" => array(
		),
		"REFRESH_PRICES" => "N",
		"RESTRICT_CHANGE_PAYSYSTEM" => array(
			0 => "0",
		),
		"SET_TITLE" => "N",
		"COMPONENT_TEMPLATE" => "template",
		"STATUS_COLOR_B" => "yellow",
		"STATUS_COLOR_F" => "green",
		"STATUS_COLOR_H" => "gray",
		"STATUS_COLOR_N" => "yellow",
		"STATUS_COLOR_OT" => "gray",
		"STATUS_COLOR_P" => "green",
		"STATUS_COLOR_PSEUDO_CANCELLED" => "gray",
		"STATUS_COLOR_SV" => "yellow",
		"STATUS_COLOR_TT" => "yellow",
		"STATUS_COLOR_W" => "yellow",
		"STATUS_COLOR_ZO" => "yellow"
	),
	false
);?>
</div>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>