<?php
require_once('controllers/admin/base_controller.php');
class DashboardController extends BaseController
{
  function __construct()
  {
    $this->folder = 'home';
  }
  public function index()
  {
    $this->render('index');
  }
}
?>