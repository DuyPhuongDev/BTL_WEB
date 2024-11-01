<?php
function getMProduct()
{
    $db =  mysqli_connect("localhost", "root", "", "đồ án");
    $get_products = "SELECT * FROM products WHERE product_id > 1 ORDER BY RAND() LIMIT 5";
    $run_products = mysqli_query($db, $get_products);

    while ($row_products = mysqli_fetch_array($run_products)) {

        $product_id = $row_products['product_id'];
        $product_name = $row_products['product_name'];
        $product_price = $row_products['price'];
        $product_img = $row_products['image_url'];

        echo "
        <div class='product-item'>
            <div class='pi-pic' style='max-height:300px'>
                <img src='img/products/$product_img' alt='$product_name' style='height: 300px'>
                <ul>
                    <li class='quick-view'><a href='product.php?product_id=$product_id' style='background:#fe4231;color:white'></a></li>
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
