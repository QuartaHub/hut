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
	<div class="sale-order-list">
		<?php
		$_REQUEST['show_all'] = "Y";
		$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.order.list", 
	"template", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ALLOW_INNER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "template",
		"DEFAULT_SORT" => "ACCOUNT_NUMBER",
		"DISALLOW_CANCEL" => "N",
		"HISTORIC_STATUSES" => array(
		),
		"ID" => $ID,
		"NAV_TEMPLATE" => "main",
		"ONLY_INNER_FULL" => "N",
		"ORDERS_PER_PAGE" => "10",
		"PATH_TO_BASKET" => "/cart/",
		"PATH_TO_CANCEL" => "",
		"PATH_TO_CATALOG" => "/catalog/",
		"PATH_TO_COPY" => "",
		"PATH_TO_DETAIL" => "/orders/detail/?ID=#ID#",
		"PATH_TO_PAYMENT" => "payment.php",
		"REFRESH_PRICES" => "N",
		"RESTRICT_CHANGE_PAYSYSTEM" => array(
			0 => "0",
		),
		"SAVE_IN_SESSION" => "Y",
		"SET_TITLE" => "N",
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
</div>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>