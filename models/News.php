<?php
require_once("./Enum.php");
class News {
    private $news_id;
    private $title;
    private $content;
    private NewsStatusEnum $status;
    private $created_at;
    private $updated_at;

    public function __construct($news_id, $title, $content, NewsStatusEnum $status, $created_at, $updated_at) {
        $this->news_id = $news_id;
        $this->title = $title;
        $this->content = $content;
        $this->status = $status;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function save() {
        // Save or update news in database
    }

    public function delete() {
        // Delete news from database
    }
}
?>
