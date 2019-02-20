<?php


class UserFactoryTest extends TestCase
{
    private $userData;

    public function setUp()
    {
//        $this->userData = new \Classes\UserArrayRepo(['name' => 'ahmed', 'email' => 'aaaa@aaa.com']);
        $this->userData = 'aaa';
    }

    public function testInput()
    {
        $this->assertInstanceOf(\Interfaces\UserRepoInterface::class, $this->userData);
    }

    /**
     * @depends testInput
     */
    public function testReturnType()
    {
        $this->assertInstanceOf(\Classes\User::class, \Classes\UserFactory::getBasicUser($this->userData));
    }
}
