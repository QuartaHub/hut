<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?><section class="aboutHead" >
<div class="aboutHead__container">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"breadcrumbs_line_white",
	Array(
		"PATH" => "",
		"SITE_ID" => "ht",
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
 <a href="/catalog/" class="about__link hover_2">В каталог</a>
		</div>
	</div>
	<div class="about__gallery">
 <img alt="1.jpg" src="/upload/medialibrary/ddb/g1prf6xuq61m3cn1yiplmbk5f80vtf0w/1.jpg" title="1.jpg"> <img alt="2.jpg" src="/upload/medialibrary/b23/21fmc8zuk9l84bt4pm2gywf3g8jq4qtn/2.jpg" title="2.jpg"> <img alt="3.jpg" src="/upload/medialibrary/541/qng6p4x9r6qcin69qldxp4iq24bydbw8/3.jpg" title="3.jpg"> <img alt="4.jpg" src="/upload/medialibrary/982/fvly8ydoj33gnza90ooqi8zrugpoowny/4.jpg" title="4.jpg">
	</div>
</div>
 </section><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>