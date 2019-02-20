<?php


namespace Classes;

use Interfaces\UserRepoInterface;

class UserArrayRepo implements UserRepoInterface
{
    private $name;
    private $email;

    public function __construct(array $userRepo)
    {
        $this->name = array_key_exists('name', $userRepo) ? $userRepo['name'] : null;
        $this->email = array_key_exists('email', $userRepo) ? $userRepo['email'] : null;
    }

    public function getName()
    {
        return isset($this->name) ? $this->name : false;
    }

    public function getEmail()
    {
        return $this->email;
    }
}