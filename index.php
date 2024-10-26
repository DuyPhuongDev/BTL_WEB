<?php
require_once "config/database.php";
require_once "routes/web.php";

// Lấy thông tin route
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home/index';
$url = explode('/', $url);

// Điều hướng đến controller và action
$controllerName = ucfirst($url[0]) . 'Controller';
$action = isset($url[1]) ? $url[1] : 'index';

require_once "app/Controllers/{$controllerName}.php";
$controller = new $controllerName;
$controller->$action();
