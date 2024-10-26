<?php
// public/index.php

require_once '../config/config.php';

// Tự động phân tích đường dẫn URL
$requestUri = $_SERVER['REQUEST_URI'];
$requestUri = trim($requestUri, '/');

// Phân tích đường dẫn thành phần
$parts = explode('/', $requestUri);
$controllerName = !empty($parts[0]) ? ucfirst($parts[0]) . 'Controller' : 'HomeController';
$methodName = !empty($parts[1]) ? $parts[1] : 'index';

// Tải controller tương ứng
$controllerPath = '../app/controllers/' . $controllerName . '.php';
if (file_exists($controllerPath)) {
    require_once $controllerPath;
    $controller = new $controllerName;

    // Gọi phương thức tương ứng
    if (method_exists($controller, $methodName)) {
        $controller->$methodName();
    } else {
        echo "Method not found!";
    }
} else {
    echo "Controller not found!";
}
