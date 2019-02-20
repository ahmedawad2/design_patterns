<?php


namespace Classes;


use Interfaces\GetUser;
use Interfaces\SwaziRepoInterface;

class SwaziUser implements SwaziRepoInterface, GetUser
{
    private $user;
    private $date;

    public function __construct(\Interfaces\User $user)
    {
        $this->user = $user;
    }

    public function setDate($date = null)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getUser(): GetUser
    {
        return $this;
    }

//    public function getName()
//    {
//        return $this->user->getName();
//    }
//    public function getEmail()
//    {
//
//    }
}