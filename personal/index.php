<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

global $USER;
if (!$USER->IsAuthorized()) {
    header('Location: /');
}

$APPLICATION->SetTitle("Личный кабинет");
?>
<section class="guaranteesHead">
	<div class="guaranteesHead__container">
		 <?$APPLICATION->IncludeComponent(
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
	$APPLICATION->IncludeComponent("bitrix:menu", "personal", Array(
	"COMPONENT_TEMPLATE" => "",
		"ROOT_MENU_TYPE" => "sidebar",	// Тип меню для первого уровня
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
	);?>
	<?php
	$APPLICATION->IncludeComponent(
		"bitrix:main.profile",
		"personal",
		Array(
			"CHECK_RIGHTS" => "N",
			"SEND_INFO" => "N",
			"SET_TITLE" => "N",
			"USER_PROPERTY" => array(),
			"USER_PROPERTY_NAME" => ""
		)
	);?>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>