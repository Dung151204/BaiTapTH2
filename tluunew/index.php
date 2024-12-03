<?php
require_once 'controllers/HomeController.php';
require_once 'controllers/NewsController.php';
require_once 'controllers/AdminController.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'HomeController';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controllerInstance = new $controller();
$controllerInstance->$action();
