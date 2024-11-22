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
		$this->render('index');
	}
}

