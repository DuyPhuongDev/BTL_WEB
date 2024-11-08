<?php
class Role{
    private $role_id;
    private $role_name;

    public function __construct($role_id, $role_name){
        $this->role_id = $role_id;
        $this->role_name = $role_name;
    }
}