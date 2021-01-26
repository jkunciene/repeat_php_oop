<?php


namespace Users;


class Student extends User
{
    private $average;

    public function __construct($name, $email, $role, $average)
    {

        $this->name = $name;
        $this->email=$email;
        $this->role=$role;
        $this->average = $average;

    }

   public function addDescription($description)
    {
        $this->description = $description;
    }

    public function showInfo(){
        $data[] = $this->name;
        $data[] = $this->email;
        $data[] = $this->role;
        $data[] = $this->average;
        $data[] = $this->description;

        return $data;
    }
}
