<?php
require_once 'controllers/ArticlesController.php';

function dd($x)
{
    echo '<pre>';
    var_dump($x);
    die();
}

$requestParts = explode('/', $_SERVER['REQUEST_URI']);
$controllerName = $requestParts[1];
$actionName = $requestParts[2];


$controller = new ArticlesController();
$controller->index();
