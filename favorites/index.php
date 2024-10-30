<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Избранное'); ?>

<?php $APPLICATION->IncludeComponent(
    'hut:favorites',
    'main',
    [
        'IBLOCK_TYPE' => 'userdata',
        'IBLOCK_ID' => '21',
    ]
);?>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>