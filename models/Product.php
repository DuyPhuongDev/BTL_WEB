<?php
class Product {
    private $product_id;
    private $product_name;
    private $description;
    private $image_url;
    private $price;
    private $category_id;
    private $created_at;
    private $updated_at;

    public function __construct($product_id, $product_name, $description, $image_url, $price, $category_id, $created_at, $updated_at) {
        $this->product_id = $product_id;
        $this->product_name = $product_name;
        $this->description = $description;
        $this->image_url = $image_url;
        $this->price = $price;
        $this->category_id = $category_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    
}
?>
