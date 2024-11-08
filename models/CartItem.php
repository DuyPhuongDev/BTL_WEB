<?php
class CartItem {
    private $cart_item_id;
    private $cart_id;
    private $product_id;
    private $quantity;
    private $added_at;

    public function __construct($cart_item_id, $cart_id, $product_id, $quantity, $added_at) {
        $this->cart_item_id = $cart_item_id;
        $this->cart_id = $cart_id;
        $this->product_id = $product_id;
        $this->quantity = $quantity;
        $this->added_at = $added_at;
    }

    public function save() {
        // Save or update cart item in database
    }

    public function delete() {
        // Delete cart item from database
    }
}
?>
