<?php
require_once './Enum.php';
class User {
    private $user_id;
    private $username;
    private $password;
    private $email;
    private $full_name;
    private $avatar_url;
    private $phone;
    private $address;
    private UsersStatusEnum $status;
    private $created_at;
    private $updated_at;

    public function __construct($user_id, $username, $password, $email, $full_name, $avatar_url, $phone, $address, UsersStatusEnum $status, $created_at, $updated_at) {
        $this->user_id = $user_id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->full_name = $full_name;
        $this->avatar_url = $avatar_url;
        $this->phone = $phone;
        $this->address = $address;
        $this->status = $status;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function save() {
        // Save or update user in database
    }

    public function delete() {
        // Delete user from database
    }
    public function update($username, $password, $email, $full_name, $avatar_url, $phone, $address, UsersStatusEnum $status) {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->full_name = $full_name;
        $this->avatar_url = $avatar_url;
        $this->phone = $phone;
        $this->address = $address;
        $this->status = $status;
        $this->updated_at = date('Y-m-d H:i:s');

        // Assuming you have a mysqli instance $mysqli
        global $mysqli;

        $sql = "UPDATE users SET username = ?, password = ?, email = ?, full_name = ?, avatar_url = ?, phone = ?, address = ?, status = ?, updated_at = ? WHERE user_id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('sssssssssi', $this->username, $this->password, $this->email, $this->full_name, $this->avatar_url, $this->phone, $this->address, $this->status, $this->updated_at, $this->user_id);

        return $stmt->execute();
    }
}
?>
