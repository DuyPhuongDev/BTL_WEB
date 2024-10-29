<?php
require_once('controllers/admin/base_controller.php');
require_once('models/news.php');


class NewsController extends BaseController
{
	function __construct()
	{
		$this->folder = 'news';
	}

	public function index()
	{
        $news = News::getAll();
        $data = array('news' => $news);
        $this->render('index', $data);
	}
    public function add(){
        $content = $_POST['content'];
        $title = $_POST['title'];
        News::insert($title, $content);
        header('Location: index.php?page=admin&controller=news&action=index');
    }
    public function edit(){
        $id = $_POST['news_id'];
        $content = $_POST['content'];
        $title = $_POST['title'];
        News::update($id, $title, $content);
        header('Location: index.php?page=admin&controller=news&action=index');
    }
    public function delete(){
        $id = $_POST['news_id'];
        News::delete($id);
        header('Location: index.php?page=admin&controller=news&action=index');
    }
    public function hide(){
        $id = $_POST['news_id'];
        News::hide($id);
        header('Location: index.php?page=admin&controller=news&action=index');
    }
}
