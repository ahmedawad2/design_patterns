<?php

namespace Classes;


use Interfaces\GetUser;
use Interfaces\SwaziRepoInterface;
use Interfaces\UserRepoInterface;
use Traits\GetUserTrait;


class UserFactory
{

    private $basicUser;

    public function __construct()
    {
        $this->basicUser = new User();
    }

    public function getBasicUser(UserRepoInterface $userRepo): \Interfaces\User
    {
        $this->prepareBasicUser($userRepo);

        return $this->basicUser;
    }

    public function getSwaziUser(SwaziRepoInterface $swaziRepo, \Interfaces\User $user = null): \Interfaces\User
    {
        $this->prepareBasicUser($swaziRepo);
        $swaziUser = new SwaziUser(isset($user) ? $user : $this->basicUser);
        $swaziUser->setDate($swaziRepo->getDate());
        return $swaziUser;
    }

    private function prepareBasicUser(UserRepoInterface $userRepo)
    {
        $this->basicUser->setName($userRepo->getName());
        $this->basicUser->setEmail($userRepo->getEmail());
    }


}