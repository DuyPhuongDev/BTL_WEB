<?php
require_once('controllers/base_controller.php');
require_once('models/comment.php');
require_once('models/news.php');
require_once('models/user.php');


class CommentsController extends BaseController
{
	function __construct()
	{
		$this->folder = 'comments';
	}

	public function index()
	{
        $comments = Comment::getAll();
        $users = User::getAll();
        $news =  News::getAll();
        $data = array('comments' => $comments, 'users' => $users, 'news' => $news );

        $this->render('index',$data);
	}
    public function add(){
        $content = $_POST['content'];
        $news_id = $_POST['news_id'];
        $user_id = $_POST['user_id'];
        Comment::insert($content, $news_id, $user_id);
        header('Location: index.php?page=admin&controller=comments&action=index');
    }
    public function edit(){
        $id = $_POST['comment_id'];
        $content = $_POST['title'];
        Comment::update($id, $content);
        header('Location: index.php?page=admin&controller=comments&action=index');
    }
    public function delete(){
        $id = $_POST['comment_id'];
        Comment::delete($id);
        header('Location: index.php?page=admin&controller=comments&action=index');
    }
    public function hide(){
        $id = $_POST['comment_id'];
        $getdata = Comment::get($id)->approved;
        if($getdata==1){
            Comment::block($id);
        }else{
            Comment::unblock($id);
        }

        header('Location: index.php?page=admin&controller=comments&action=index');
    }
}