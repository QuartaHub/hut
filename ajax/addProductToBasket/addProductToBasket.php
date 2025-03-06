<?php

use Bitrix\Main\Loader;
use Bitrix\Sale\Internals\BasketTable;
use Bitrix\Sale\Fuser;
use \Bitrix\Iblock\Elements\ElementHutMainCatalogTable;
use \Bitrix\Iblock\Elements\ElementHutMainOffersCatalogTable;
use Bitrix\Highloadblock as HL;

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

Loader::includeModule('sale');
Loader::includeModule('catalog');
Loader::includeModule('iblock');
Loader::includeModule('highloadblock');

$basketRes = BasketTable::getList([
    'filter' => [
        'FUSER_ID' => Fuser::getId(),
        'ORDER_ID' => null,
        'LID' => SITE_ID,
        'CAN_BUY' => 'Y',
    ]
]);

if ($basketRes) {
    $productsIds = [];

    while ($basketItem = $basketRes->fetch()) {
        if ($basketItem['PRODUCT_ID']) {
            $isOffer = false;
            $mainProductId = false;

            $mxResult = CCatalogSku::GetProductInfo($basketItem['PRODUCT_ID']);
            if (is_array($mxResult)) {
                $isOffer = true;
                $mainProductId = $mxResult['ID'];
            }

            $productsIds[] = [
                'ID' => $basketItem['PRODUCT_ID'],
                'IS_OFFER' => $isOffer,
                'MAIN_PRODUCT_ID' => $mainProductId
            ];
        }
    }

    if (!empty($productsIds)) {
        $basketProducts = [];

        $entityColor = HL\HighloadBlockTable::compileEntity(HUT_OFFERS_COLOR_HL_CODE);
        $entityDataClassColor = $entityColor->getDataClass();

        $entitySize = HL\HighloadBlockTable::compileEntity(CLOTHES_SIZE_HL_ENTITY);
        $entityDataClassSize = $entitySize->getDataClass();

        foreach ($productsIds as $key => $productsId) {
            $basketProduct = [];

            if ($productsId['IS_OFFER']) {
                $element = ElementHutMainOffersCatalogTable::getList([
                    'select' => [
                        'ID',
                        'NAME',
                        'PREVIEW_PICTURE',
                        'CLOTHES_SIZE',
                        'COLOR'
                    ],
                    'filter' => [
                        'ACTIVE' => 'Y',
                        'ID' => $productsId['ID']
                    ]
                ])->fetchObject();

                if ($element) {
                    if ($element->getId()) {
                        $basketProduct['ID'] = $element->getId();
                    }

                    if ($element->getName()) {
                        $basketProduct['NAME'] = $element->getName();
                    }

                    if ($element->getPreviewPicture()) {
                        $basketProduct['PICTURE'] = CFile::GetPath($element->getPreviewPicture());
                    }

                    if ($element->getColor() && $element->getColor()->getValue()) {
                        $color = $element->getColor()->getValue();
                        $colorName = '';

                        $rsData = $entityDataClassColor::getList([
                            'select' => ['UF_NAME', 'UF_FILE'],
                            'order' => [],
                            'filter' => [
                                'UF_XML_ID' => $color
                            ]
                        ]);

                        while($arData = $rsData->Fetch()){
                            if ($arData['UF_NAME']) {
                                $colorName = $arData['UF_NAME'];
                            }

                            if ($arData['UF_FILE']) {
                                $color = CFile::GetPath($arData['UF_FILE']);
                            }
                        }

                        $basketProduct['PROPS']['COLOR'] = [
                            'NAME' => 'Цвет',
                            'VALUE' => $colorName,
                            'COLOR' => $color
                        ];
                    }

                    if ($element->getClothesSize() && $element->getClothesSize()->getValue()) {
                        $size = $element->getClothesSize()->getValue();

                        $rsData = $entityDataClassSize::getList([
                            'select' => ['UF_NAME'],
                            'order' => [],
                            'filter' => [
                                'UF_XML_ID' => $size
                            ]
                        ]);

                        while($arData = $rsData->Fetch()){
                            if ($arData['UF_NAME']) {
                                $size = $arData['UF_NAME'];
                            }
                        }

                        $basketProduct['PROPS']['SIZE'] = [
                            'NAME' => 'Размер',
                            'VALUE' => $size
                        ];
                    }

                    if ($productsId['MAIN_PRODUCT_ID']) {
                        if (!$basketProduct['PICTURE']) {
                            $mainProduct = ElementHutMainCatalogTable::getList([
                                'select' => [
                                    'PREVIEW_PICTURE'
                                ],
                                'filter' => [
                                    'ACTIVE' => 'Y',
                                    'ID' => $productsId['MAIN_PRODUCT_ID']
                                ]
                            ])->fetchObject();

                            if ($mainProduct && $mainProduct->getPreviewPicture()) {
                                $basketProduct['PICTURE'] = CFile::GetPath($mainProduct->getPreviewPicture());
                            }
                        }

                        $sections = CIBlockElement::GetElementGroups($productsId['MAIN_PRODUCT_ID'], true, ['ID', 'NAME']);
                        $mainSection = '';

                        if ($sections) {
                            while ($section = $sections->Fetch()) {
                                $mainSection = $section['NAME'];
                            }
                        }

                        $basketProduct['SECTION'] = $mainSection;
                    }

                    $basketProduct['SORT'] = $key;
                }
            } else {
                $element = ElementHutMainCatalogTable::getList([
                    'select' => [
                        'ID',
                        'NAME',
                        'PREVIEW_PICTURE'
                    ],
                    'filter' => [
                        'ACTIVE' => 'Y',
                        'ID' => $productsId['ID']
                    ]
                ])->fetchObject();

                if ($element) {
                    if ($element->getId()) {
                        $basketProduct['ID'] = $element->getId();
                    }

                    if ($element->getName()) {
                        $basketProduct['NAME'] = $element->getName();
                    }

                    if ($element->getPreviewPicture()) {
                        $basketProduct['PICTURE'] = CFile::GetPath($element->getPreviewPicture());
                    }

                    $sections = CIBlockElement::GetElementGroups($productsId['ID'], true, ['ID', 'NAME']);
                    $mainSection = '';
                    if ($sections) {
                        while ($section = $sections->Fetch()) {
                            $mainSection = $section['NAME'];
                        }
                    }

                    $basketProduct['SECTION'] = $mainSection;
                }

                $basketProduct['SORT'] = $key;
            }

            if (!empty($basketProduct)) {
                $basketProducts[] = $basketProduct;
            }
        }

        usort($basketProducts, 'sortBasketProducts');

        $html = '<div class="basket-products-block">';
                foreach ($basketProducts as $product) {
                    $html .= '
                        <div class="product-block">
                            <div class="product-image-block">
                                <img src="' . $product['PICTURE'] .'" alt="' . $product['NAME'] . '">
                            </div>
                            <div class="product-info-block">
                                <span class="product-name">' . $product['NAME'] .'</span>
                                <span class="product-section">' . $product['SECTION'] .'</span>';
                                if (!empty($product['PROPS'])) {
                                    $html .= '<div class="prop-info-block">';
                                        foreach ($product['PROPS'] as $prop) {
                                            $html .= '<div class="prop">
                                                <span class="prop-name">' . $prop['NAME'] . ':</span>';
                                                if ($prop['COLOR']) {
                                                    $html .= '<span class="circle-prop" style="background-image: url(' . $prop['COLOR'] . ')"></span>';
                                                }
                                                $html .= '<span class="prop-value">' . $prop['VALUE'] . '</span>
                                            </div>';
                                        }
                                    $html .= '</div>';
                                }

                    $html .= '</div></div>';
                }
                $html .= '</div><div class="buttons-block">
                    <a href="/cart/" class="to-cart-button">Перейти в корзину</a>
                    <a href="javascript:void(0);" class="close-modal-button">Закрыть</a>
                </div>';

        echo $html;
    }

    echo '';
}

function sortBasketProducts($a, $b) {
    return strcmp($a['SORT'], $b['SORT']);
}