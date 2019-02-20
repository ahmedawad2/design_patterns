<?php

namespace Classes;


use Interfaces\SwaziRepoInterface;
use Interfaces\UserRepoInterface;

class UserFactory
{

    public static function getBasicUser(UserRepoInterface $userRepo): User
    {
        $user = new User();
        $user->setName($userRepo->getName());
        $user->setEmail($userRepo->getEmail());
        return $user->getUser();
    }

    public static function getSwaziUser(SwaziRepoInterface $swaziRepo): User
    {
        $user = new SwaziUser;
        $user->setName($swaziRepo->getName());
        $user->setEmail($swaziRepo->getEmail());
        $user->setDate($swaziRepo->getDate());
        return $user->getUser();
    }


}