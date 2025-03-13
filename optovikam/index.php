<?php

use Helpers\IblockHelper;

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

global $APPLICATION;

$APPLICATION->SetTitle('Оптовикам'); ?>
<section class="opt_image-block">
    <div class="container">
        <?php $APPLICATION->IncludeComponent(
            'bitrix:breadcrumb',
            'breadcrumbs_line_white',
            [
                'PATH' => '',
                'SITE_ID' => 'ht',
                'START_FROM' => '0'
            ],
            false
        ); ?>
        <div class="images-block">
            <div class="image-block big-image-block">
                <img src="<?= SITE_TEMPLATE_PATH . '/img/opt/img1.jpg' ?>" alt="">
            </div>
            <div class="image-block">
                <img src="<?= SITE_TEMPLATE_PATH . '/img/opt/img2.jpg' ?>" alt="">
            </div>
            <div class="image-block">
                <img src="<?= SITE_TEMPLATE_PATH . '/img/opt/img3.jpg' ?>" alt="">
            </div>
            <div class="image-block">
                <img src="<?= SITE_TEMPLATE_PATH . '/img/opt/img4.jpg' ?>" alt="">
            </div>
            <div class="image-block">
                <img src="<?= SITE_TEMPLATE_PATH . '/img/opt/img5.jpg' ?>" alt="">
            </div>
            <div class="image-block big-image-block text-block">
                <?php $APPLICATION->IncludeComponent(
                    'bitrix:main.include',
                    '.default',
                    [
                        'AREA_FILE_SHOW' => 'file',
                        'AREA_FILE_SUFFIX' => 'inc',
                        'EDIT_TEMPLATE' => '',
                        'PATH' => '/include/opt/image-block-text.php'
                    ]
                ); ?>
            </div>
        </div>
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
                            'PATH' => '/include/opt/text-under-images-hut.php'
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
                            'PATH' => '/include/opt/text-under-images-small.php'
                        ]
                    ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="opt_success-block">
    <div class="container">
        <h2>
            <?php $APPLICATION->IncludeComponent(
                'bitrix:main.include',
                '.default',
                [
                    'AREA_FILE_SHOW' => 'file',
                    'AREA_FILE_SUFFIX' => 'inc',
                    'EDIT_TEMPLATE' => '',
                    'PATH' => '/include/opt/success-h2.php'
                ]
            ); ?>
        </h2>
        <h3>
            <?php $APPLICATION->IncludeComponent(
                'bitrix:main.include',
                '.default',
                [
                    'AREA_FILE_SHOW' => 'file',
                    'AREA_FILE_SUFFIX' => 'inc',
                    'EDIT_TEMPLATE' => '',
                    'PATH' => '/include/opt/success-h3.php'
                ]
            ); ?>
        </h3>
        <div class="success-info-block">
            <div class="success-info_item">
                <div class="success-info_item-icon">
                    <?= buildSVG('opt-success-1', SITE_TEMPLATE_PATH . ICON_PATH) ?>
                </div>
                <div class="success-info_item-text">
                    <?php $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '.default',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/include/opt/success-item-text-1.php'
                        ]
                    ); ?>
                </div>
            </div>
            <div class="success-info_item">
                <div class="success-info_item-icon">
                    <?= buildSVG('opt-success-2', SITE_TEMPLATE_PATH . ICON_PATH) ?>
                </div>
                <div class="success-info_item-text">
                    <?php $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '.default',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/include/opt/success-item-text-2.php'
                        ]
                    ); ?>
                </div>
            </div>
            <div class="success-info_item">
                <div class="success-info_item-icon">
                    <?= buildSVG('opt-success-3', SITE_TEMPLATE_PATH . ICON_PATH) ?>
                </div>
                <div class="success-info_item-text">
                    <?php $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '.default',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/include/opt/success-item-text-3.php'
                        ]
                    ); ?>
                </div>
            </div>
            <div class="success-info_item">
                <div class="success-info_item-icon">
                    <?= buildSVG('opt-success-4', SITE_TEMPLATE_PATH . ICON_PATH) ?>
                </div>
                <div class="success-info_item-text">
                    <?php $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '.default',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/include/opt/success-item-text-4.php'
                        ]
                    ); ?>
                </div>
            </div>
            <div class="success-info_item">
                <div class="success-info_item-icon">
                    <?= buildSVG('opt-success-5', SITE_TEMPLATE_PATH . ICON_PATH) ?>
                </div>
                <div class="success-info_item-text">
                    <?php $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '.default',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/include/opt/success-item-text-5.php'
                        ]
                    ); ?>
                </div>
            </div>
            <div class="success-info_item">
                <div class="success-info_item-icon">
                    <?= buildSVG('opt-success-6', SITE_TEMPLATE_PATH . ICON_PATH) ?>
                </div>
                <div class="success-info_item-text">
                    <?php $APPLICATION->IncludeComponent(
                        'bitrix:main.include',
                        '.default',
                        [
                            'AREA_FILE_SHOW' => 'file',
                            'AREA_FILE_SUFFIX' => 'inc',
                            'EDIT_TEMPLATE' => '',
                            'PATH' => '/include/opt/success-item-text-6.php'
                        ]
                    ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="opt_form">
    <div class="container">
        <?php $APPLICATION->IncludeComponent(
            'bitrix:form.result.new',
            'opt',
            [
                'CACHE_TIME' => '3600',
                'CACHE_TYPE' => 'A',
                'CHAIN_ITEM_LINK' => '',
                'CHAIN_ITEM_TEXT' => '',
                'EDIT_URL' => '',
                'IGNORE_CUSTOM_TEMPLATE' => 'N',
                'LIST_URL' => '',
                'SEF_MODE' => 'N',
                'SUCCESS_URL' => '',
                'USE_EXTENDED_ERRORS' => 'N',
                'VARIABLE_ALIASES' => [
                    'RESULT_ID' => 'RESULT_ID',
                    'WEB_FORM_ID' => 'WEB_FORM_ID'
                ],
                'WEB_FORM_ID' => '9'
            ]
        ); ?>
    </div>
</section>
<? 
global $arrfilter;
$arrfilter = ['PROPERTY_SHOW_VALUE' => "Оптовикам"]; ?>
<section class="opt_contacts">
    <div class="container">
        <?php $APPLICATION->IncludeComponent(
            'bitrix:news.list',
            'opt.contacts',
            [
                'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                'ADD_SECTIONS_CHAIN' => 'N',
                'AJAX_MODE' => 'N',
                'AJAX_OPTION_ADDITIONAL' => '',
                'AJAX_OPTION_HISTORY' => 'N',
                'AJAX_OPTION_JUMP' => 'N',
                'AJAX_OPTION_STYLE' => 'Y',
                'CACHE_FILTER' => 'N',
                'CACHE_GROUPS' => 'Y',
                'CACHE_TIME' => '36000000',
                'CACHE_TYPE' => 'A',
                'CHECK_DATES' => 'Y',
                "COMPONENT_TEMPLATE" => 'opt.contacts',
                'DETAIL_URL' => '',
                'DISPLAY_BOTTOM_PAGER' => 'Y',
                'DISPLAY_DATE' => 'Y',
                'DISPLAY_NAME' => 'Y',
                'DISPLAY_PICTURE' => 'Y',
                'DISPLAY_PREVIEW_TEXT' => 'Y',
                'DISPLAY_TOP_PAGER' => 'N',
                'FIELD_CODE' => [],
                'FILTER_NAME' => 'arrfilter',
                'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
                'IBLOCK_ID' => IblockHelper::getIdByCode('contacts'),
                'IBLOCK_TYPE' => 'hut',
                'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                'INCLUDE_SUBSECTIONS' => 'Y',
                'MESSAGE_404' => '',
                'NEWS_COUNT' => '20',
                'PAGER_BASE_LINK_ENABLE' => 'N',
                'PAGER_DESC_NUMBERING' => 'N',
                'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
                'PAGER_SHOW_ALL' => 'N',
                'PAGER_SHOW_ALWAYS' => 'N',
                'PAGER_TEMPLATE' => '.default',
                'PAGER_TITLE' => 'Новости',
                'PARENT_SECTION' => '',
                'PARENT_SECTION_CODE' => '',
                'PREVIEW_TRUNCATE_LEN' => '',
                'PROPERTY_CODE' => ['MAIL', 'PHONE', 'WORK_TIME', 'WORK_TIME_WEEKDAY'],
                'SET_BROWSER_TITLE' => 'N',
                'SET_LAST_MODIFIED' => 'N',
                'SET_META_DESCRIPTION' => 'N',
                'SET_META_KEYWORDS' => 'N',
                'SET_STATUS_404' => 'N',
                'SET_TITLE' => 'N',
                'SHOW_404' => 'N',
                'SORT_BY1' => 'SORT',
                'SORT_BY2' => 'ID',
                'SORT_ORDER1' => 'ASC',
                'SORT_ORDER2' => 'DESC',
                'STRICT_SECTION_CHECK' => 'N'
            ]
        ); ?>
    </div>
</section>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');