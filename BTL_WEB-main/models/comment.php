<?php
require_once('./connection.php');
class Comment
{
    public $comment_id;
    public $created_at;
    public $content;
    public $news_id;
    public $user_id;
    public $news_title;
    public $user_name;
    public $status;

    public function __construct($comment_id, $created_at, $content, $news_id, $user_id, $news_title, $user_name, $status)
    {
        $this->comment_id = $comment_id;
        $this->created_at = $created_at;
        $this->content = $content;
        $this->news_id = $news_id;
        $this->user_id = $user_id;
        $this->news_title = $news_title;
        $this->user_name = $user_name;
        $this->status = $status;
    }

    static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT 
        C.comment_id AS comment_id,
        C.created_at AS created_at,
        C.content AS content,
        C.news_id AS news_id,
        C.user_id AS user_id,
        N.title AS title,
        U.fname AS fname,
        U.lname AS lname,
        C.status AS status
        FROM comment AS C, user AS U, news AS N WHERE C.news_id = N.news_id AND C.user_id = U.email ORDER BY C.created_at");
        $comments = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $comment) {
            $comments[] = new Comment(
                $comment['comment_id'],
                $comment['created_at'],
                $comment['content'],
                $comment['news_id'],
                $comment['user_id'],
                $comment['title'],
                $comment['fname'] . ' ' . $comment['lname'],
                $comment['status']
            );
        }
        return $comments;
    }

    static function get($id)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT 
        C.comment_id AS comment_id,
        C.created_at AS created_at,
        C.content AS content,
        C.news_id AS news_id,
        C.user_id AS user_id,
        N.title AS title,
        U.fname AS fname,
        U.lname AS lname,
        C.status AS status
        FROM comment AS C, user AS U, news AS N WHERE C.news_id = N.news_id AND C.user_id = U.email AND C.comment_id = $id ORDER BY C.created_at");
        $result = $req->fetch_assoc();
        $comment = new Comment(
            $result['comment_id'],
            $result['created_at'],
            $result['content'],
            $result['news_id'],
            $result['user_id'],
            $result['title'],
            $result['fname'] . ' ' . $result['lname'],
            $result['status']
        );
        return $comment;
    }

    static function getCommentByNews($news_id)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT 
        C.comment_id AS comment_id,
        C.created_at AS created_at,
        C.content AS content,
        C.news_id AS news_id,
        C.user_id AS user_id,
        N.title AS title,
        U.fname AS fname,
        U.lname AS lname,
        C.status AS status
        FROM comment AS C, user AS U, news AS N WHERE C.news_id = N.news_id AND C.user_id = U.email AND C.news_id = $news_id ORDER BY C.created_at DESC;");
        $comments = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $comment) {
            $comments[] = new Comment(
                $comment['comment_id'],
                $comment['created_at'],
                $comment['content'],
                $comment['news_id'],
                $comment['user_id'],
                $comment['title'],
                $comment['fname'] . ' ' . $comment['lname'],
                $comment['status']
            );
        }
        return $comments;
    }

    static function getCommentByUser($user_id)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT 
        C.comment_id AS comment_id,
        C.created_at AS created_at,
        C.content AS content,
        C.news_id AS news_id,
        C.user_id AS user_id,
        N.title AS title,
        U.fname AS fname,
        U.lname AS lname,
        C.status AS status
        FROM comment AS C, user AS U, news AS N WHERE C.news_id = N.news_id AND C.user_id = U.email AND C.user_id = $user_id ORDER BY C.created_at DESC;");
        $comments = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $comment) {
            $comments[] = new Comment(
                $comment['comment_id'],
                $comment['created_at'],
                $comment['content'],
                $comment['news_id'],
                $comment['user_id'],
                $comment['title'],
                $comment['fname'] . ' ' . $comment['lname'],
                $comment['status']
            );
        }
        return $comments;
    }


    static function insert($content, $news_id, $user_id)
    {
        $approved = true;
        $db = DB::getInstance();
        $req = $db->query(
            "
            INSERT INTO comment (created_at, content, news_id, user_id)
            VALUES (NOW(), '$content', $news_id, '$user_id')
            ;"
        );
        return $req;
    }

    static function reply($content, $news_id, $user_id)
    {
        $approved = true;
        $db = DB::getInstance();
        $req = $db->query(
            "
            INSERT INTO comment (created_at, content, news_id, user_id)
            VALUES (NOW(), '$content', $news_id, '$user_id')
            ;"
        );
        return $req;
    }

    static function getReply($id)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT 
        C.comment_id AS comment_id,
        C.created_at AS created_at,
        C.content AS content,
        C.news_id AS news_id,
        C.user_id AS user_id,
        N.title AS title,
        U.fname AS fname,
        U.lname AS lname,
        C.status AS status
        FROM comment AS C, user AS U, news AS N WHERE C.news_id = N.news_id AND C.user_id = U.email;");
        $replies = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $reply) {
            $replies[] = new Comment(
                $reply['comment_id'],
                $reply['created_at'],
                $reply['content'],
                $reply['news_id'],
                $reply['user_id'],
                $reply['title'],
                $reply['fname'] . ' ' . $reply['lname'],
                $reply['status']
            );
        }
        return $replies;
    }

    static function delete($id)
    {
        $db = DB::getInstance();
        $req = $db->query("DELETE FROM comment WHERE comment_id = $id;");
        return $req;
    }

    static function update($id, $content)
    {
        $db = DB::getInstance();
        $req = $db->query("UPDATE comment SET content = '$content' WHERE comment_id = $id;");
        return $req;
    }

    static function block($id)
    {
        $db = DB::getInstance();
        $req = $db->query("UPDATE comment SET status = 'hidden' WHERE comment_id = $id;");
        return $req;
    }

    static function unblock($id)
    {
        $db = DB::getInstance();
        $req = $db->query("UPDATE comment SET status = 'visible' WHERE comment_id = $id;");
        return $req;
    }
}
