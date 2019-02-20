<?php


namespace Classes;

use Interfaces\UserRepoInterface;

class UserArrayRepo implements UserRepoInterface
{
    private $name;
    private $email;

    public function __construct(array $userRepo)
    {
        $this->name = $userRepo['name'];
        $this->email = $userRepo['email'];
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