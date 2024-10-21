<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?><section class="aboutHead" title="Код PHP: &lt;?=SITE_TEMPLATE_PATH?&gt;"><?=SITE_TEMPLATE_PATH?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/img/pattern.png) no-repeat center / cover; background-color: #171a1f;"&gt;
<div class="aboutHead__container">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"breadcrumbs_line_white",
	Array(
		"PATH" => "",
		"SITE_ID" => "h1",
		"START_FROM" => "0"
	)
);?>
	<div class="aboutHead__content">
		<h1 class="aboutHead__title">
		<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/about/title.php"
	)
);?> </h1>
		<p class="aboutHead__text">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/about/subtitle.php"
	)
);?>
		</p>
	</div>
</div>
 </section> <section class="about">
<div class="about__container">
	<div class="about__textWrap">
		<div class="about__col">
			<h2 class="about__title">
			<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/about/description_left.php"
	)
);?> </h2>
		</div>
		<div class="about__col">
			<p class="about__text">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/about/description.php"
	)
);?>
			</p>
 <a href="/catalog/" class="about__link">В каталог</a>
		</div>
	</div>
	<div class="about__gallery">
 <img src="/local/templates/hut/img/gal/1.jpg" alt=""><img src="/local/templates/hut/img/gal/1.jpg" alt=""><img src="/local/templates/hut/img/gal/1.jpg" alt=""><img src="/local/templates/hut/img/gal/1.jpg">
	</div>
</div>
 </section><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>