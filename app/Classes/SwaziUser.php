<?php


namespace Classes;

use Interfaces\SwaziUserInterface;

class SwaziUser implements \Interfaces\User, SwaziUserInterface
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

    public function setName($name = null)
    {
        $this->user->setName($name);
    }

    public function setEmail($email = null)
    {
        $this->user->setEmail($email);
    }

    public function getName()
    {
        return $this->user->getName();
    }

    public function getEmail()
    {
        return $this->user->getEmail();
    }
}