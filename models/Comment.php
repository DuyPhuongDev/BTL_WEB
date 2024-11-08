<?php
require_once("./Enum.php");
class Comment {
    private $comment_id;
    private $user_id;
    private $content;
    private $news_id;
    private $created_at;
    private CommentStatusEnum $status;

    public function __construct($comment_id, $user_id, $content, $news_id, $created_at, CommentStatusEnum $status) {
        $this->comment_id = $comment_id;
        $this->user_id = $user_id;
        $this->content = $content;
        $this->news_id = $news_id;
        $this->created_at = $created_at;
        $this->status = $status;
    }

    public function save() {
        // Save or update comment in database
    }

    public function delete() {
        // Delete comment from database
    }
}
?>
