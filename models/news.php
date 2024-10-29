<?php
require_once('./connection.php');
class News
{
    public $news_id;
    public $status;
    public $created_at;
    public $updated_at;
    public $title;
    public $content;

    public function __construct($news_id, $status, $created_at, $updated_at, $title, $content)
    {
        $this->news_id = $news_id;
        $this->status = $status;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->title = $title;
        $this->content = $content;
    }

    static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM news ORDER BY created_at DESC");
        $lnews = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $news)
        {
            $lnews[] = new News(
                $news['news_id'],
                $news['status'],
                $news['created_at'],
                $news['updated_at'],
                $news['title'],
                $news['content']
            );
        }
        return $lnews;
    }

    static function getAllShow()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM news WHERE status='visible' ORDER BY created_at DESC");
        $lnews = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $news)
        {
            $lnews[] = new News(
                $news['news_id'],
                $news['status'],
                $news['created_at'],
                $news['updated_at'],
                $news['title'],
                $news['content']
            );
        }
        return $lnews;
    }

    static function get($id)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM news WHERE news_id = $id");
        $result = $req->fetch_assoc();
        $news = new News(
            $result['news_id'],
            $result['status'],
            $result['created_at'],
            $result['updated_at'],
            $result['title'],
            $result['content']
        );
        return $news;
    }

    static function insert($title, $content)
    {
        $status = true;
        $created_at = date("Y-m-d-h-i-s");
        $db = DB::getInstance();
        $req = $db->query(
            "
            INSERT INTO news (status, created_at, updated_at, title, content)
            VALUES ($status, '$created_at', '$created_at', '$title', '$content')
            ;");
        return $req;
    }

    static function delete($id)
    {
        $db = DB::getInstance();
        $req = $db->query("DELETE FROM news WHERE news_id = $id;");
        return $req;
    }

    static function update($id, $title, $description, $content)
    {
        $db = DB::getInstance();
        $updated_at = date("Y-m-d-h-i-s");
        $req = $db->query("UPDATE news SET updated_at = '$updated_at', content = '$content', title = '$title' WHERE news_id = $id;");
        return $req;
    }

    static function hide($id)
    {   
        $db = DB::getInstance();
        $statuscurrent = News::get($id)->status;
        if ($statuscurrent == 1){
            $req = $db->query("UPDATE news SET status = 'hidden' WHERE news_id = $id;");
        }
        else{
            $req = $db->query("UPDATE news SET status = 'visible' WHERE news_id = $id;");
        }
        return $req;
    }

    static function show($id)
    {
        $db = DB::getInstance();
        $req = $db->query("UPDATE news SET status = 'visible' WHERE news_id = $id;");
        return $req;
    }

    static function recentNews()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM news WHERE status = 'visible' ORDER BY created_at DESC LIMIT 5");
        $lnews = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $news)
        {
            $lnews[] = new News(
                $news['news_id'],
                $news['status'],
                $news['created_at'],
                $news['updated_at'],
                $news['title'],
                $news['content']
            );
        }
        return $lnews;
    }
}