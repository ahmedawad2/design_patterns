<?php

namespace Classes;

use Interfaces\SwaziRepoInterface;

class SwaziArrayRepo extends UserArrayRepo implements SwaziRepoInterface
{
    private $date;

    public function __construct(array $userRepo)
    {
        parent::__construct($userRepo);
        $this->date = $userRepo['date'];
    }

    public function getDate()
    {
        return $this->date;
    }
}