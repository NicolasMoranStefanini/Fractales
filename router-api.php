<?php
require_once 'libs/router-adv.php';
require_once 'app/api/api-comments.controller.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('comments/:ID', 'GET', 'ApiCommentsController', 'getCommentsById');
$router->addRoute('comments/:ID', 'POST', 'ApiCommentsController', 'addComment');
$router->addRoute('comments/:ID', 'DELETE', 'ApiCommentsController', 'removeComment');
$router->setDefaultRoute('ApiCommentsController','show404');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);