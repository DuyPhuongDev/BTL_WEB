<?php 
session_start();
if (!isset($_SESSION['customer_email'])) {
    $_SESSION['customer_email'] = 'unset';
} else {
    return;
}
function getMProduct()
{
    $db = DB::getInstance();
    $get_products = "select * from products where product_id > 1 order by RAND() LIMIT 5";
    $run_products = mysqli_query($db, $get_products);

    while ($row_products = mysqli_fetch_array($run_products)) {

        $products_id = $row_products['products_id'];
        $product_name = $row_products['product_name'];
        $product_price = $row_products['product_price'];
        $product_img = $row_products['image_url'];

        echo "
        
        <div class='product-item'>
        <div class='pi-pic' style='max-height:300px'>
            <img src='img/products/$product_img' alt='$product_name'>
            <ul>
                <li class='quick-view'><a href='product.php?product_id=$products_id' style='background:#fe4231;color:white'>View Details</a></li>
            </ul>
        </div>
        <div class='pi-text'>
            <a href='#'>
                <h5>$product_name</h5>
            </a>
            <div class='product-price'>
            PKR $product_price
            </div>
        </div>
    </div>

    ";
    }
}
?>