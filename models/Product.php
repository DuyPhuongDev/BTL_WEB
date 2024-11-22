<?php
require_once('./connection.php');
class Product
{
    public $product_id;
    public $product_name;
    public $description;
    public $image_url;
    public $price;
    public $category_id;
    public $created_at;
    public $updated_at;

    public function __construct($product_id, $product_name, $description, $image_url, $price, $category_id, $created_at, $updated_at)
    {
        $this->product_id = $product_id;
        $this->product_name = $product_name;
        $this->description = $description;
        $this->image_url = $image_url;
        $this->price = $price;
        $this->category_id = $category_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
    public static function getAll()
    {
        $db = DB::getInstance(); // Giả sử DB::getInstance() trả về kết nối MySQLi
        $req = $db->query("SELECT * FROM products");
        $products = [];

        foreach ($req->fetch_all(MYSQLI_ASSOC) as $product) {
            $products[] = new Product(
                $product['product_id'],
                $product['product_name'],
                $product['description'],
                $product['image_url'],
                $product['price'],
                $product['category_id'],
                $product['created_at'],
                $product['updated_at']
            );
        }

        return $products;
    }

    // Phương thức static để lấy thông tin một sản phẩm theo id
    public static function get($id)
    {
        $db = DB::getInstance(); // Giả sử DB::getInstance() trả về kết nối MySQLi
        $req = $db->query("SELECT * FROM products WHERE product_id = $id");
        // $req = $db->query("SELECT * FROM products");
        $products = [];

        foreach ($req->fetch_all(MYSQLI_ASSOC) as $product) {
            $products[] = new Product(
                $product['product_id'],
                $product['product_name'],
                $product['description'],
                $product['image_url'],
                $product['price'],
                $product['category_id'],
                $product['created_at'],
                $product['updated_at']
            );
        }
        return $products;
    }

    public static function getcate($id)
    {
        $db = DB::getInstance(); // Giả sử DB::getInstance() trả về kết nối MySQLi
        $req = $db->query("SELECT * FROM products WHERE category_id = $id");
        $products = [];

        foreach ($req->fetch_all(MYSQLI_ASSOC) as $product) {
            $products[] = new Product(
                $product['product_id'],
                $product['product_name'],
                $product['description'],
                $product['image_url'],
                $product['price'],
                $product['category_id'],
                $product['created_at'],
                $product['updated_at']
            );
        }

        return $products;
    }
}
?>