<?php
require_once("controllers/main/base_controller.php");
require_once('models/Product.php');
require_once('models/Category.php');
require_once('connection.php');
class ProductsController extends BaseController
{
    function __construct()
    {
        $this->folder = "products";
    }
    public function index()
    {
        if (isset($_GET['viewdetail']) && isset($_GET['cat_id'])) {

            $products = Product::get($_GET['viewdetail']);
            $p_cat = Category::getAll();
            $link = Category::get($_GET['cat_id']);
            $likeproducts = Product::getcate($_GET['cat_id']);
            $data1 = array('products' => $products);
            $data2 = array('p_cat' => $p_cat);
            $data3 = array('link' => $link);
            $data4 = array('likeproducts' => $likeproducts);
            $data = $data1 + $data2 + $data3+$data4;
            $this->render('index', $data);
            return;
        }
        if (isset($_GET['cat_id'])) {

            $products = Product::getcate($_GET['cat_id']);
            $p_cat = Category::getAll();
            $link = Category::get($_GET['cat_id']);
            $data1 = array('products' => $products);
            $data2 = array('p_cat' => $p_cat);
            $data3 = array('link' => $link);
            $data = $data1 + $data2 + $data3;
            $this->render('index', $data);
            return;
        }
        $products = Product::getAll();
        $p_cat = Category::getAll();
        $data1 = array('products' => $products);
        $data2 = array('p_cat' => $p_cat);
        $data = $data1 + $data2;
        $this->render('index', $data);
    }
}
?>