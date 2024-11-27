<?php 
require_once("controllers/main/base_controller.php");
class AboutController extends BaseController
{
    function __construct()
    {
        session_start();
        $this->folder = "about";
    }
    public function index()
    {
        $this->render("index");
    }   
}
?>