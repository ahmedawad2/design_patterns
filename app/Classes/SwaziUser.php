<?php


namespace Classes;


use Interfaces\SwaziRepoInterface;

class SwaziUser extends User implements SwaziRepoInterface
{
    private $date;

    public function setDate($date = null)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }
}