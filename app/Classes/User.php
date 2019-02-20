<?php

namespace Classes;

class User implements \Interfaces\User
{
//    use GetUserTrait;

    private $name;
    private $email;

    public function setName($name = null)
    {
        $this->name = $name;
    }

    public function setEmail($email = null)
    {
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}