<?php
require_once("controllers/main/base_controller.php");
require_once("models/User.php");
require_once("models/Role.php");
require_once('models/Product.php');
require_once('models/Cart.php');
require_once('models/CartItem.php');
require_once('models/Payment.php');

class AccountController extends BaseController {
    function __construct()
    {
        $this->folder = "account";
    }
    public function index()
    {
        session_start();
        if(isset($_SESSION['username']) && isset($_SESSION['role_id'])) {
            // get user by username
            $user = User::getUserByUsername($_SESSION['username']);
            $payments = Payment::getPaymentsByUserId($user->getUserId());
            // get role
            $role = Role::getRoleById($user->getRoleId());
            $data = [
                'username' => $user->getUsername(),
                'role' => $role->getRoleName(),
                'user' => $user,
            ];
            $orders = [];
            foreach($payments as $item){
                $orders[] = [
                    'payment_id' => $item->getPaymentId(),
                    'payment_date' => $item->getPaymentDate(),
                    'total' => $item->getTotalPrice(),
                    'payment_method' => $item->getMethod(),
                    'status' => $item->getStatus()
                ];
            }
            $data['orders'] = $orders;
            $this->render("index", $data);
        } else {
            header("Location: index.php?controller=main&action=login");
        }
    }   
}

?>