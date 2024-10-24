<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle('О компании');
?>

<section class="aboutHead" style="background: url(<?= SITE_TEMPLATE_PATH ?>/img/pattern.png) no-repeat center / cover; background-color: #171a1f;">
	<div class="aboutHead__container">
		<? $APPLICATION->IncludeComponent(
			"bitrix:breadcrumb",
			"breadcrumbs_line_white",
			array(
				"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
				"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
				"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
			),
			false
		); ?>

		<div class="aboutHead__content">
			<h1 class="aboutHead__title">
				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/include/about/title.php"
					)
				); ?>
			</h1>
			<p class="aboutHead__text">
				<? $APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/include/about/subtitle.php"
					)
				); ?>
			</p>
		</div>
	</div>
</section>

<section class="about">
	<div class="about__container">
		<div class="about__textWrap">
			<div class="about__col">
				<h2 class="about__title">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "",
							"PATH" => "/include/about/description_left.php"
						)
					); ?>
				</h2>
			</div>

			<div class="about__col">
				<p class="about__text">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "",
							"PATH" => "/include/about/description.php"
						)
					); ?>
				</p>
				<a href="/catalog/" class="about__link">В каталог</a>
			</div>
		</div>

		<div class="about__gallery">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/gal/1.jpg" alt="">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/gal/2.png" alt="">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/gal/3.png" alt="">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/gal/4.png" alt="">
		</div>
	</div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>