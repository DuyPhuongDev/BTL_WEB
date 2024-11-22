<?php
// echo $page.'<br>';
// echo $controller.'<br>';
// echo $action."<br>";
$pages = array(
  'error' => ['errors'],
  'main' => ['home', 'about', 'products', 'blog', 'contact', 'login', 'register', 'detail', 'detail_blog'],
  'admin' => ['home', 'members', 'products', 'news', 'comments']
);
$controllers = array(
  //Admin controller
  'errors' => ['index'],
  'home' => ['index'], // Bổ sung thêm các hàm trong controllers
  'members' => ['index'],
  'products' => ['index', 'add', 'edit', 'delete'],
  'news' => ['index', 'add', 'edit', 'delete', 'hide'],
  'comments' => ['index', 'hide', 'add', 'edit', 'delete'],
  'admin' => ['index', 'add', 'edit', 'delete'],
  'user' => ['index', 'add', 'editInfo', 'editPass', 'delete'],
  'login' => ['index', 'check', 'logout'],

  //Main controller
  'about' => ['index'],
  'home' => ['index'],
  'detail' => ['index'],
  'blog' => ['index'],
  'contact' => ['index'],
  'detail_blog' => ['index', 'comment', 'reply'],
  'blog' => ['index', 'comment', 'reply'],
  'products' => ['index'],
  'register' => ['index', 'submit', 'editInfo'],
  'login' => ['index','logout']
); // Các controllers trong hệ thống và các action có thể gọi ra từ controller đó.

if (!array_key_exists($page, $pages) || !array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $page = 'error';
  $controller = 'errors';
  $action = 'index';
}
// echo $page.'<br>';
// echo "controllers/main/".$controller."_controller.php"."<br>";
// echo $action."<br>";
include_once('controllers/main/' . $controller . '_controller.php');
$klass = ucfirst($controller) . 'Controller';
$controller = new $klass;
$controller->$action();