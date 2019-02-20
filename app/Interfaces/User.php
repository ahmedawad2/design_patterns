<?php

namespace Interfaces;

interface User
{
    public function setName($name = null);

    public function setEmail($email = null);

    public function getName();

    public function getEmail();

}