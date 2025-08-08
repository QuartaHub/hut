<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");

use Helpers\IblockHelper;
?>
<section class="guaranteesHead">
	<div class="guaranteesHead__container">
		<? $APPLICATION->IncludeComponent(
			"bitrix:breadcrumb",
			"breadcrumbs_line",
			array(
				"PATH" => "",
				"SITE_ID" => "ht",
				"START_FROM" => "0"
			)
		); ?>
		<h1 class="guaranteesHead__title"><?php $APPLICATION->ShowTitle(false); ?></h1>
	</div>
</section>
<?
global $arrfilter;
$arrfilter = ['PROPERTY_SHOW_VALUE' => "Контакты"]; ?>
<? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"contacts",
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "contacts",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0 => "", 1 => "",),
		"FILTER_NAME" => "arrfilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => IblockHelper::getIdByCode('contacts'),
		"IBLOCK_TYPE" => "hut",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0 => "", 1 => "MAP", 2 => "MAIL", 3 => "PHONE", 4 => "",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N"
	)
); ?>
<section class="opt_image-block">
	<div class="container">
		<div class="text-under-images">
			<div class="text-under-images__item">
				<div class="image-block big-image-block text-block">
					<?php $APPLICATION->IncludeComponent(
						'bitrix:main.include',
						'.default',
						[
							'AREA_FILE_SHOW' => 'file',
							'AREA_FILE_SUFFIX' => 'inc',
							'EDIT_TEMPLATE' => '',
							'PATH' => '/include/contacts/text_under_maps1.php'
						]
					); ?>
				</div>
			</div>
			<div class="text-under-images__item">
				<div class="image-block big-image-block text-block">
					<?php $APPLICATION->IncludeComponent(
						'bitrix:main.include',
						'.default',
						[
							'AREA_FILE_SHOW' => 'file',
							'AREA_FILE_SUFFIX' => 'inc',
							'EDIT_TEMPLATE' => '',
							'PATH' => '/include/contacts/text_under_maps2.php'
						]
					); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contacts bottom">
	<div class="contacts__wrap">
		<div class="contacts__card">
			<h3 class="contacts__title">
				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/include/contacts/small_title.php"
					)
				); ?>
			</h3>
			<div class="contacts__info-wrap">
				<div class="contacts__info">
					<div class="contacts__icon">
						<img src="/local/templates/hut/img/phone.svg" alt="">
					</div>
					<div class="contacts__inf phone">
						<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => "",
								"PATH" => "/include/contacts/phone.php"
							)
						); ?>
					</div>
				</div>
				<div class="contacts__info">
					<div class="contacts__icon">
						<img src="/local/templates/hut/img/email.svg" alt="">
					</div>
					<div class="contacts__inf">
						<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => "",
								"PATH" => "/include/contacts/email.php"
							)
						); ?>
					</div>
				</div>
				<div class="contacts__info">
					<div class="contacts__icon">
						<img src="/local/templates/hut/img/click.svg" alt="">
					</div>
					<div class="contacts__inf">
						<? $APPLICATION->IncludeComponent(
							"bitrix:main.include",
							"",
							array(
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "inc",
								"EDIT_TEMPLATE" => "",
								"PATH" => "/include/contacts/click.php"
							)
						); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="contacts__card form">
			<? $APPLICATION->IncludeComponent(
				"bitrix:form.result.new",
				"contacts",
				array(
					"CACHE_TIME" => "3600",
					"CACHE_TYPE" => "A",
					"CHAIN_ITEM_LINK" => "",
					"CHAIN_ITEM_TEXT" => "",
					"EDIT_URL" => "result_edit.php",
					"IGNORE_CUSTOM_TEMPLATE" => "N",
					"LIST_URL" => "result_list.php",
					"SEF_MODE" => "N",
					"SUCCESS_URL" => "",
					"USE_EXTENDED_ERRORS" => "N",
					"VARIABLE_ALIASES" => array("RESULT_ID" => "RESULT_ID", "WEB_FORM_ID" => "WEB_FORM_ID"),
					"WEB_FORM_ID" => 8
				)
			); ?>
		</div>
	</div>
</section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>