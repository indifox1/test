<?php
require_once 'controllers/ArticlesController.php';
require_once 'controllers/UsersController.php';
require_once 'helpers/helpers.php';

$requestParts = explode('/', $_SERVER['REQUEST_URI']);
$controllerName = ucfirst($requestParts[1]) . 'Controller';
if (is_numeric($requestParts[2])) {
    $actionName = $requestParts[3];
    $id = $requestParts[2];
} else {
    $actionName = $requestParts[2];
    $id = null;
}

$controller = new $controllerName;
if ($id) {

    $controller->$actionName($id);
} else {
    $controller->$actionName();
}
