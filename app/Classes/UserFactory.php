<?php

namespace Classes;


use Interfaces\GetUser;
use Interfaces\SwaziRepoInterface;
use Interfaces\UserRepoInterface;

class UserFactory
{
    private $basicUser;

    public function __construct(\Interfaces\User $user = null)
    {
        if (isset($user)) {
            $this->basicUser = $user;
        } else {
            $this->basicUser = new User();
        }
    }

    public function getBasicUser(UserRepoInterface $userRepo): GetUser
    {
        $this->prepareBasicUser($userRepo);
        return $this->basicUser->getUser();
    }

    public function getSwaziUser(SwaziRepoInterface $swaziRepo): GetUser
    {
        $this->prepareBasicUser($swaziRepo);
        $swaziUser = new SwaziUser($this->basicUser);
        $swaziUser->setDate($swaziRepo->getDate());
        return $swaziUser->getUser();
    }

    private function prepareBasicUser(UserRepoInterface $userRepo)
    {
        $this->basicUser->setName($userRepo->getName());
        $this->basicUser->setEmail($userRepo->getEmail());
    }


}