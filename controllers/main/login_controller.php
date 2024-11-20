<?php
require_once('controllers/main/base_controller.php');
require_once('models/user.php');
require_once('models/admin.php');

class LoginController extends BaseController
{
	function __construct()
	{
		$this->folder = 'login';
	}

	public function index()
	{
		session_start();
		if (isset($_SESSION["guest"]))
		{
			header('Location: index.php?page=main&controller=layouts&action=index');
		}
		else if (isset($_POST['signinUser']))
		{
			$username = $_POST['your_email'];
			$password = $_POST['your_pass'];
			unset($_POST);
			$check = User::validation($username, $password);
			if ($check == 1)
			{
				$_SESSION["guest"] = $username;
				header('Location: index.php?page=main&controller=layouts&action=index');
			}
			else 
			{
				$err = "Sai tài khoản hoặc mật khẩu";
				$data = array('err' => $err);
				$this->render('index', $data);
			}
		}
		else if (isset($_POST['signinAdmin']))
		{
			$username = $_POST['your_email'];
			$password = $_POST['your_pass'];
			unset($_POST);
			$check = Admin::validation($username, $password);
			if ($check == 1)
			{
				$_SESSION["guest"] = $username;
				header('Location: index.php?page=main&controller=layouts&action=index');
			}
			else 
			{
				$err = "Sai tài khoản hoặc mật khẩu";
				$data = array('err' => $err);
				$this->render('index', $data);
			}
		}
		else
		{
			$this->render('index');
		}
	}

	public function logout()
	{
		session_start();
		unset($_SESSION["guest"]);
		session_destroy();
		header("Location: index.php?page=main&controller=layouts&action=index");
	}
}
