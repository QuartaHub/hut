<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Положение о конфиденциальности");
?>

<section class="policyHead">
	<div class="policyHead__container">
		<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs_line", Array(
			"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
				"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
				"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
			),
			false
		);?>

		<h1 class="policyHead__title"><?php $APPLICATION->ShowTitle(false);?></h1>
	</div>
</section>

<section class="policy">

 <div class="policy__text">
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "page",
			"AREA_FILE_SUFFIX" => "inc",
			"EDIT_TEMPLATE" => ""
		)
	);?>
 </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>