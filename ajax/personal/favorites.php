<?php

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Application;
use Personal\Favorites;
use Helpers\IblockHelper;

$request = Application::getInstance()->getContext()->getRequest()->getJsonList()->toArray();

$productId = $request['id'] ?: 0;
$action = $request['action'] ?: 'ADD';

$response = null;

$favorites = new Favorites(IblockHelper::getIdByCode("hutfavorites"), HUT_FAVORITES_COOCKIE_NAME);

switch ($action) {
    case 'ADD':
        $response = $favorites->addFavorites($productId);
        break;

    case 'DELETE':
        $response = $favorites->deleteFavorites($productId);
        break;

    default:
        break;
}

echo json_encode($response);
