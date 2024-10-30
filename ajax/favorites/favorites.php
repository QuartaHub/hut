<?php

require ($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Application;
use Personal\Favorites;

$request = Application::getInstance()->getContext()->getRequest();

$productId = $request['productId'] ?: 0;
$action = $request['action'] ?: 'ADD';

$response = null;

$favorites = new Favorites();

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