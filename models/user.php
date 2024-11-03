<?php
require_once('./connection.php');
class User
{
    public $username;
    public $password;
    public $email;
    public $full_name;
    public $avatar_url;
    public $phone;
    public $address;
    public $role_id;
    public $status;
    public $created_at;
    public $updated_at;

    public function __construct($username, $password, $email, $full_name, $avatar_url, $phone, $address, $role_id, $status, $created_at,$updated_at)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->full_name = $full_name;
        $this->avatar_url = $avatar_url;
        $this->phone = $phone;
        $this->address = $address;
        $this->role_id = $role_id;
        $this->status = $status;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query(
            "SELECT *
            FROM users;"
        );
        $users = [];
        foreach($req->fetch_all(MYSQLI_ASSOC) as $user) {
            $users[] = new User(
                $user['username'],
                $user['password'],
                $user['email'],
                $user['full_name'],
                $user['avatar_url'],
                $user['phone'],
                $user['address'],
                $user['role_id'],
                $user['status'],
                $user['created_at'],
                $user['updated_at'],
            );
        }
        return $users;
    }

    static function get($email)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "
            SELECT username, password, email, full_name, avatar_url, phone, address, role_id, status, created_at, updated_at
            FROM users
            WHERE email = '$email'
            ;"
        );
        $result = $req->fetch_assoc();
        $user = new User(
            $result['username'],
                $result['password'],
                $result['email'],
                $result['full_name'],
                $result['avatar_url'],
                $result['phone'],
                $result['address'],
                $result['role_id'],
                $result['status'],
                $result['created_at'],
                $result['updated_at'],
        );
        return $user;
    }

    static function insert($username, $password, $email, $full_name, $avatar_url, $phone, $address, $role_id, $status)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $db = DB::getInstance();
        $req = $db->query(
            "
            INSERT INTO users (username, password, email, full_name, avatar_url, phone, address, role_id, status)
            VALUES ('$username', '$password', '$email', '$full_name', $avatar_url, $phone, '$address','$role_id','$status', NOW(), NOW(),')
            ;");
        return $req;
    }

    static function delete($email)
    {
        $db = DB::getInstance();
        $req = $db->query("DELETE FROM users WHERE email = '$email';");
        return $req;
    }

    static function update($username, $password, $email, $full_name, $avatar_url, $phone, $address, $role_id, $status)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "
            UPDATE user
            SET avatar_url = '$avatar_url', username = '$username', password = '$password', email = $email, full_name = $full_name, phone = '$phone',address ='$address',role_id='$role_id',status='$status', updated_at = NOW()
            WHERE email = '$email'
            ;"
        );
        return $req;
    }

    static function validation($email, $password)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM users WHERE email = '$email'");
        if($result = $req -> fetch_assoc()) {
            if ($password == $result['password'])
                return true;
            else
                return false;
        }
        else {
            return false;
        }
    }

    static function changePassword($email, $oldpassword, $newpassword)
    {
        if (User::validation($email, $oldpassword)) {
            $password = password_hash($newpassword, PASSWORD_DEFAULT);
            $db = DB::getInstance();
            $req = $db->query(
                "UPDATE users
                SET password = '$password', updated_at = NOW()
                WHERE email = '$email';");
            return $req;
        } else {
            return false;
        }
    }

    static function changePassword_($email, $newpassword)
    {
        $password = password_hash($newpassword, PASSWORD_DEFAULT);
        $db = DB::getInstance();
        $req = $db->query(
            "UPDATE users
            SET password = '$password', updated_at = NOW()
            WHERE email = '$email';");
        return $req;
    }
}

?>