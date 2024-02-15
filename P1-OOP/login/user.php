<?php

class User extends Database{
    public $username;
    private $password;
    private $role;

    public function registerUser($username, $password, $role){
        $this->username = $username;
        $this->password = $password;
        $this->$role = $role;

        
    }

}