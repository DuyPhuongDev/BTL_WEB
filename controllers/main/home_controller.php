<?php
require_once('controllers/main/base_controller.php');

class HomeController extends BaseController
{
	function __construct()
	{
		$this->folder = 'home';
	}

	public function index()
	{
		session_start();
		//print_r($_SESSION);
		$this->render('index');
	}
}

