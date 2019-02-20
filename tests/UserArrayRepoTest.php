<?php


class UserArrayRepoTest extends TestCase
{
    private $userArrayRepo;

    public function setUp()
    {
        $this->userArrayRepo = new \Classes\UserArrayRepo([]);
    }

    public function testEmptyInput()
    {
        $this->assertFalse($this->userArrayRepo->getName(), 'name is falsy');
    }
}