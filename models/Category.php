<?php
class Category {
    private $category_id;
    private $category_name;

    public function __construct($category_id, $category_name) {
        $this->category_id = $category_id;
        $this->category_name = $category_name;
    }

    // Getter and Setter for category_id
    public function getCategoryId() {
        return $this->category_id;
    }

    public function setCategoryId($category_id) {
        $this->category_id = $category_id;
    }

    // Getter and Setter for category_name
    public function getCategoryName() {
        return $this->category_name;
    }

    public function setCategoryName($category_name) {
        $this->category_name = $category_name;
    }

    public static function getAll() {
        $db = DB::getInstance();
        $sql = "SELECT * FROM categories";
        $result = $db->query($sql);
        $categories = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $category = new Category($row['category_id'], $row['category_name']);
                $categories[] = $category;
            }
        }



        return $categories;
    }
}
?>
