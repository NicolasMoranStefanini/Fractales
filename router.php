<?php

include_once 'app/controllers/products.controller.php';

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

// parsea la accion Ej: suma/1/2 --> ['suma', 1, 2]
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
        $controller = new ProductsController();
        $controller->showItems();
        break;
    case 'watch':
        $controller = new ProductsController();
        $id = $params[1];
        $controller->showDetail($id);
        break;
    case 'categorys':
        $controller = new ProductsController();
        $controller->showCategorys();
        break;
    case 'category':
        $controller = new ProductsController();
        $id = $params[1];
        $controller->showProductsCategory($id);
        break;
    case 'login':
        echo"Login";
        break;
    case 'register':
        echo"Register";
        break;
    default:
        echo('404 Page not found');
        break;
}
