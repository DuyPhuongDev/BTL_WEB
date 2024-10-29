<?php
require_once('controllers/main/base_controller.php');
require_once('models/news.php');
require_once('models/comment.php');

class DetailBlogController extends BaseController
{
	function __construct()
	{
		$this->folder = 'detail_blog';
	}

	public function index()
	{
		$newses = News::getAllShow();
		$recent = News::recentNews();
		foreach ($newses as $news)
		{
			$news->comments = Comment::getCommentByNews($news->news_id);
			foreach ($news->comments as $comment)
			{
				$comment->replies = Comment::getReply(intval($comment->comment_id));
			}
		}
		foreach ($recent as $news)
		{
			$news->comments = Comment::getCommentByNews($news->news_id);
			foreach ($news->comments as $comment)
			{
				$comment->replies = Comment::getReply(intval($comment->comment_id));
			}
		}   
		$count = intdiv(count($newses), 4) + 1;
		$data = array('newses' => $newses, 'recent' => $recent, 'count' => $count);
		$this->render('index', $data);

	}

	public function reply()
	{
		$content = $_POST['content'];
		$news_id = $_POST['news_id'];
		$user_id = $_POST['user_id'];

		$req = Comment::reply($content, $news_id, $user_id);
		echo 'success';
		exit();
	}

	public function comment()
	{
		$content = $_POST['content'];
		$news_id = $_POST['news_id'];
		$user_id = $_POST['user_id'];

		$req = Comment::insert($content, $news_id, $user_id);
		echo 'success';
	}
}
