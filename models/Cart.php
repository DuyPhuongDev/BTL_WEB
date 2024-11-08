<?php
class Cart {
    private $cart_id;
    private $user_id;
    private $created_at;

    public function __construct($cart_id, $user_id, $created_at) {
        $this->cart_id = $cart_id;
        $this->user_id = $user_id;
        $this->created_at = $created_at;
    }

    public function save() {
        // Save or update cart in database
    }

    public function delete() {
        // Delete cart from database
    }
}
?>
