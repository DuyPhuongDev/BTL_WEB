<?php
require_once("controllers/main/base_controller.php");
require_once('models/Comment.php');
require_once('models/News.php');
class BlogController extends BaseController
{
    function __construct()
    {
        $this->folder = "blog";
    }
    public function index()
    {
        //$comments = Comment::getAll();
        $newses = News::getNewsByTopic('news');
        $salesNews = News::getNewsByTopic('sales');
        $data = array('newses' => $newses, 'salesNews' => $salesNews);
        $this->render("index", $data);
    }   
}
?>