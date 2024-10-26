<?php
class Router {
    public function __construct() {
        $url = $this->parseUrl();
        $controllerName = ucfirst($url[0] ?? 'home') . 'Controller';
        $methodName = $url[1] ?? 'index';

        $controllerPath = '../app/controllers/' . $controllerName . '.php';
        if (file_exists($controllerPath)) {
            require_once $controllerPath;
            $controller = new $controllerName;

            if (method_exists($controller, $methodName)) {
                $controller->{$methodName}();
            } else {
                echo "Method not found.";
            }
        } else {
            echo "Controller not found.";
        }
    }

    private function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
