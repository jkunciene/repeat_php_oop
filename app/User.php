<?php

namespace Users;

abstract class User{
       protected $name;
       protected $email;
       protected $role;
       protected $decription;


    abstract public function addDescription($description);
    abstract public function showInfo();
}

