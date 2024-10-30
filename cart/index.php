<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

global $APPLICATION;
$APPLICATION->SetTitle("Корзина");
$APPLICATION->SetPageProperty("need_slider", 'Y');
?><div class="basket-container">
    <div class="basket-top-block">
        <? $APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "breadcrumbs_line",
            array(
                "PATH" => "",
                "SITE_ID" => "h1",
                "START_FROM" => "0"
            )
        ); ?>
        <h1><?= $APPLICATION->GetTitle() ?></h1>
    </div>
</div>
<? $APPLICATION->IncludeComponent(
    "bitrix:sale.basket.basket",
    "hut_basket",
    array(
        "ACTION_VARIABLE" => "basketAction",
        "ADDITIONAL_PICT_PROP_16" => "-",
        "ADDITIONAL_PICT_PROP_26" => "-",
        "ADDITIONAL_PICT_PROP_27" => "-",
        "ADDITIONAL_PICT_PROP_45" => "-",
        "ADDITIONAL_PICT_PROP_46" => "-",
        "ADDITIONAL_PICT_PROP_84" => "-",
        "ADDITIONAL_PICT_PROP_85" => "-",
        "ADDITIONAL_PICT_PROP_88" => "-",
        "ADDITIONAL_PICT_PROP_89" => "-",
        "AUTO_CALCULATION" => "Y",
        "BASKET_IMAGES_SCALING" => "adaptive",
        "COLUMNS_LIST_EXT" => array(
            0 => "PREVIEW_PICTURE",
            1 => "PROPS",
            2 => "DELETE",
            3 => "SUM",
            4 => "PROPERTY_MATERIAL",
            5 => "PROPERTY_SIZE",
            6 => "PROPERTY_COLOR",
            7 => "PROPERTY_COLOR_CODE",
        ),
        "COLUMNS_LIST_MOBILE" => array(
            0 => "PREVIEW_PICTURE",
            1 => "PROPS",
            2 => "DELETE",
            3 => "SUM",
            4 => "PROPERTY_SIZE",
            5 => "PROPERTY_COLOR",
            6 => "PROPERTY_COLOR_CODE",
            7 => "PROPERTY_MATERIAL",
        ),
        "COMPATIBLE_MODE" => "Y",
        "COMPONENT_TEMPLATE" => "hut_basket",
        "CORRECT_RATIO" => "Y",
        "DEFERRED_REFRESH" => "N",
        "DISCOUNT_PERCENT_POSITION" => "bottom-right",
        "DISPLAY_MODE" => "extended",
        "EMPTY_BASKET_HINT_PATH" => "/",
        "GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
        "GIFTS_CONVERT_CURRENCY" => "N",
        "GIFTS_HIDE_BLOCK_TITLE" => "N",
        "GIFTS_HIDE_NOT_AVAILABLE" => "N",
        "GIFTS_MESS_BTN_BUY" => "Выбрать",
        "GIFTS_MESS_BTN_DETAIL" => "Подробнее",
        "GIFTS_PAGE_ELEMENT_COUNT" => "4",
        "GIFTS_PLACE" => "BOTTOM",
        "GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
        "GIFTS_PRODUCT_QUANTITY_VARIABLE" => "quantity",
        "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
        "GIFTS_SHOW_OLD_PRICE" => "N",
        "GIFTS_TEXT_LABEL_GIFT" => "Подарок",
        "HIDE_COUPON" => "Y",
        "LABEL_PROP" => array(),
        "OFFERS_PROPS" => "",
        "PATH_TO_ORDER" => "/personal/order/make/",
        "PRICE_DISPLAY_MODE" => "Y",
        "PRICE_VAT_SHOW_VALUE" => "N",
        "PRODUCT_BLOCKS_ORDER" => "props,sku,columns",
        "QUANTITY_FLOAT" => "Y",
        "SET_TITLE" => "N",
        "SHOW_DISCOUNT_PERCENT" => "Y",
        "SHOW_FILTER" => "N",
        "SHOW_RESTORE" => "N",
        "TEMPLATE_THEME" => "blue",
        "TOTAL_BLOCK_DISPLAY" => array(
            0 => "top",
        ),
        "USE_DYNAMIC_SCROLL" => "Y",
        "USE_ENHANCED_ECOMMERCE" => "N",
        "USE_GIFTS" => "N",
        "USE_PREPAYMENT" => "N",
        "USE_PRICE_ANIMATION" => "Y"
    ),
    false
); ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>