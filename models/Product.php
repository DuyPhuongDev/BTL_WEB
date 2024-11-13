<?php
require_once('connection.php');
class Product {
    private $product_id;
    private $product_name;
    private $description;
    private $image_url;
    private $price;
    private $category_id;
    private $created_at;
    private $updated_at;

    public function __construct($product_name, $description, $image_url, $price, $category_id) {
        $this->product_name = $product_name;
        $this->description = $description;
        $this->image_url = $image_url;
        $this->price = $price;
        $this->category_id = $category_id;
    }

    // Getter and Setter for product_id
    public function getProductId() {
        return $this->product_id;
    }

    public function setProductId($product_id) {
        $this->product_id = $product_id;
    }

    // Getter and Setter for product_name
    public function getProductName() {
        return $this->product_name;
    }

    public function setProductName($product_name) {
        $this->product_name = $product_name;
    }

    // Getter and Setter for description
    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    // Getter and Setter for image_url
    public function getImageUrl() {
        return $this->image_url;
    }

    public function setImageUrl($image_url) {
        $this->image_url = $image_url;
    }

    // Getter and Setter for price
    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    // Getter and Setter for category_id
    public function getCategoryId() {
        return $this->category_id;
    }

    public function setCategoryId($category_id) {
        $this->category_id = $category_id;
    }

    // Getter and Setter for created_at
    public function getCreatedAt() {
        return $this->created_at;
    }

    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }

    // Getter and Setter for updated_at
    public function getUpdatedAt() {
        return $this->updated_at;
    }

    public function setUpdatedAt($updated_at) {
        $this->updated_at = $updated_at;
    }
    public function addProduct() {
        // Gọi kết nối MySQLi từ DB::getInstance() 
        $db = DB::getInstance();
        
    
        // Kiểm tra kết nối
        if ($db->connect_error) {
            error_log("Connection failed: " . $db->connect_error);
            return false;
        }
    
        // Chuẩn bị câu truy vấn SQL
        $stmt = $db->prepare(
            "INSERT INTO products (product_name, description, image_url, price, category_id)
            VALUES (?, ?, ?, ?, ?)"
        );
    
        // Kiểm tra nếu việc chuẩn bị truy vấn thất bại
        if ($stmt === false) {
            error_log("Statement prepare failed: " . $db->error);
            return false;
        }
    
        // Gán các giá trị vào câu truy vấn với các tham số theo thứ tự
        $stmt->bind_param(
            "sssdi",               // Loại dữ liệu của từng tham số
            $this->product_name,      // s: string
            $this->description,       // s: string
            $this->image_url,         // s: string
            $this->price,             // d: double (decimal)
            $this->category_id,       // i: integer
        );
    
        // Thực thi câu truy vấn
        if (!$stmt->execute()) {
            error_log("Execute failed: " . $stmt->error);
            return false;
        }
    
        // Đóng statement và kết nối sau khi thực hiện xong
        $stmt->close();
        return true;
    }
    
    public static function getAll(){

        $db = DB::getInstance();
        $sql = "SELECT * FROM products";
        $result = $db->query($sql);
        $products = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $product = new Product($row['product_name'], $row['description'], $row['image_url'], $row['price'], $row['category_id']);
                $product->product_id = $row['product_id'];
                $product->created_at = $row['created_at'];
                $product->updated_at = $row['updated_at'];
                $products[] = $product;
            }
        }

        return $products;
    }
    
    
}
?>
