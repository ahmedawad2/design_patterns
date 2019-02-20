<?php
/**
 * Created by PhpStorm.
 * User: ahmedwork
 * Date: 18/02/19
 * Time: 07:43 م
 */

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