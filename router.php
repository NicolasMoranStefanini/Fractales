<?php

include_once 'app/controllers/products.controller.php';
include_once 'app/controllers/auth.controller.php';

// defino la base url para la construccion de links con urls semánticas
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'login'; // acción por defecto si no envían
}

// parsea la accion
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'category':
        $controller = new ProductsController();
        $controller->category();
        break;
    case 'product':
        $controller = new ProductsController();
        $controller->product();
        break;
    case 'watch':
        $controller = new ProductsController();
        $id = $params[1];
        $controller->productDetail($id);
        break;
    case 'category':
        $controller = new ProductsController();
        $id = $params[1];
        $controller->showProductsCategory($id);
        break;
    case 'login':
        $controller = new AuthController();
        $controller->showLogin();
        break;
    case 'register':
        $controller = new AuthController();
        $controller->showRegister();
        break;
    case 'new-user':
        $controller = new AuthController();
        $controller->createAccount();
        break;
    case 'verify':
        $controller = new AuthController();
        $controller->loginUser();
        break;
    case 'logout':
        $controller = new AuthController();
        $controller->logout();
        break;   
    case 'crudProducts':
        $controller = new ProductsController(); 
        $controller->crudItems();
        break;
    case 'deleteProduct':
        $controller = new ProductsController();
        $id = $params[1];
        $controller->deleteProduct($id);
        break;
    case 'updateProduct':
        $controller = new ProductsController();
        $id = $params[1];
        $controller->updateProduct($id);
        break;
    case 'doUpdate':
        $controller = new ProductsController(); 
        $controller->doUpdate();
        break;
    case 'newProduct':
        $controller = new ProductsController(); 
        $controller->newProduct();
        break;
    case 'crudCategories':
        $controller = new ProductsController(); 
        $controller->crudCategories();
        break;
    case 'newCategory':
        $controller = new ProductsController(); 
        $controller->newCategory();
        break;
    case 'deleteCategory':
        $controller = new ProductsController();
        $id = $params[1];
        $controller->deleteCategory($id);
        break; 
    case 'updateCategory':
        $controller = new ProductsController();
        $id = $params[1];
        $controller->crudCategories($id);
        break;
    case 'doUpdateCategory':
        $controller = new ProductsController(); 
        $controller->doUpdateCategory();
        break;
    case 'crudUsers':
        $controller = new AuthController();
        $controller->crudUsers();
        break;
    case 'toggleAdmin':
        $controller = new AuthController();
        $id = $params[1];
        $controller->toggleAdmin($id);
        break;
    case 'deleteUser':
        $controller = new AuthController();
        $id = $params[1];
        $controller->removeUser($id);
        break;
    default:
        $controller = new ProductsController();
        $controller->categoryList();
        break;
}