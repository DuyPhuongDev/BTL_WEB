<?php
class Category {
    private $category_id;
    private $category_name;
    private $description;

    public function __construct($category_id, $category_name, $description = null) {
        $this->category_id = $category_id;
        $this->category_name = $category_name;
        $this->description = $description;
    }

    public function save() {
        // Save or update category in database
    }

    public function delete() {
        // Delete category from database
    }
}
?>
