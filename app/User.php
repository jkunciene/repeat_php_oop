<?php

namespace Users;

class User{
    public $name;
    public $email;
    public $role;
    public $decription;

    public function __construct($name, $email, $role){

        $this->name=$name;
        $this->email = $email;
        $this->role = $role;

    }

    public function addDescription($description){
        $this->description = $description;
    }

    public function showInfo(){

        $data[] = $this->name;
        $data[] = $this->email;
        $data[] = $this->role;
        $data[] = $this->description;

        return $data;
    }
}

