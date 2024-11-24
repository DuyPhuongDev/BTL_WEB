<?php
class Category {
    public $category_id;
    public $category_name;
    public $description;

    public function __construct($category_id, $category_name, $description = null) {
        $this->category_id = $category_id;
        $this->category_name = $category_name;
        $this->description = $description;
    }

    public function save() {
        // Save or update category in database
    }
    public static function getAll() {
        $db = DB::getInstance(); // Giả sử DB::getInstance() trả về kết nối MySQLi
        $result = $db->query("SELECT * FROM categories");

        $categories = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $category = new Category($row['category_id'], $row['category_name']);
                $categories[] = $category;
            }
        }
        return $categories;
    }
    public static function get($id) {
        $db = DB::getInstance(); // Giả sử DB::getInstance() trả về kết nối MySQLi
        $result = $db->query("SELECT * FROM categories WHERE category_id = $id");

        $categories = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $category = new Category($row['category_id'], $row['category_name']);
                $categories[] = $category;
            }
        }
        return $categories;
    }
    public function delete() {
        // Delete category from database
    }
}
?>
