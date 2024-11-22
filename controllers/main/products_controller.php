<?php
    require_once("controllers/main/base_controller.php");
    class ProductsController extends BaseController
    {
        function __construct()
        {
            $this->folder = "products";
        }
        public function index()
        {
            $this->render("index");
        }   
    }
?>