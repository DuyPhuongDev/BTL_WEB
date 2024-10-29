<?php
$pages = array(
  'error' => ['errors'],
  'main' => ['layouts', 'about', 'services', 'blog', 'archive', 'contact', 'login', 'register', 'detail', 'sale', 'detail_blog'],
  'admin' => ['layouts', 'members', 'products', 'news', 'comments']
);
$controllers = array(
  //Admin controller
  'errors' => ['index'],
  'layouts' => ['index'], // Bổ sung thêm các hàm trong controllers
  'members' => ['index'],
  'products' => ['index', 'add', 'edit', 'delete'],
  'news' => ['index', 'add', 'edit', 'delete', 'hide'],
  'comments' => ['index', 'hide', 'add', 'edit', 'delete'],
  'admin' => ['index', 'add', 'edit', 'delete'],
  'user' => ['index', 'add', 'editInfo', 'editPass', 'delete'],
  'company' => ['index', 'add', 'edit', 'delete'],
  'login' => ['index', 'check', 'logout'],

  //Main controller
  'about' => ['index'],
  'sale' => ['index'],
  'detail' => ['index'],
  'blog' => ['index'],
  'archive' => ['index'],
  'contact' => ['index'],
  'detail_blog' => ['index', 'comment', 'reply'],
  'blog' => ['index', 'comment', 'reply'],
  'services' => ['index'],
  'register' => ['index', 'submit', 'editInfo'],
  // 'login' => ['index']
); // Các controllers trong hệ thống và các action có thể gọi ra từ controller đó.

if (!array_key_exists($page, $pages) || !array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $page = 'error';
  $controller = 'errors';
  $action = 'index';
}
if ($page == 'error') {
  $controller = 'errors';
  $action = 'index';
}
include_once('controllers/' . $page . "/" . $controller . '_controller.php');
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();
