<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Пользовательское соглашение");
?>

<section class="policyHead">
	<div class="policyHead__container">
		<? $APPLICATION->IncludeComponent(
			"bitrix:breadcrumb",
			"breadcrumbs_line",
			array(
				"PATH" => "",
				"SITE_ID" => "ht",
				"START_FROM" => "0",
			),
			false
		); ?>

		<h1 class="policyHead__title"><?php $APPLICATION->ShowTitle(false); ?></h1>
	</div>
</section>

<section class="policy">

	<div class="policy__text">
		<? $APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			array(
				"AREA_FILE_SHOW" => "page",
				"AREA_FILE_SUFFIX" => "inc",
				"EDIT_TEMPLATE" => ""
			)
		); ?>
	</div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>