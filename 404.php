<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetPageProperty('not-found-page', 'not-found-page');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");
define("HIDE_SIDEBAR", true);

$APPLICATION->SetTitle("Страница не найдена");?>

<section class="c404">
 <div class="c404__container">
	<img src="<?=SITE_TEMPLATE_PATH?>/img/404.png" alt="" class="c404__img">
	<h1 class="c404__title">Такой страницы нет</h1>
	<p class="c404__text">Попробуйте воспользоваться <a id="search_opener" href="#">поиском</a> или посмотрите на других страницах:
	</p>
	<?$APPLICATION->IncludeComponent("bitrix:menu", "404_menu", Array(
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
			"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
			"DELAY" => "N",	// Откладывать выполнение шаблона меню
			"MAX_LEVEL" => "1",	// Уровень вложенности меню
			"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
				0 => "",
			),
			"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
			"MENU_CACHE_TYPE" => "N",	// Тип кеширования
			"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
			"ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
			"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		),
		false
	);?>
 </div>
</section>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>