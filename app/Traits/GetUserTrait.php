<?php

namespace Traits;

trait GetUserTrait
{
    public function getUser()
    {
        if ($this instanceof \Interfaces\User) {
            return $this;
        }
    }
}