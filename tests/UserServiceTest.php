<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Security\Models\User;
use Security\Services\UserService;

class UserServiceTest extends TestCase
{
    /**
     * @var UserService
     */
    private $userService;

    public function __construct()
    {
        $this->userService = new UserService();

        parent::__construct();
    }

    public function testCreate()
    {
        $user = new User();
        $user->setEmail('test@gmail.com');
        $user->setPassword('test');

        $response = $this->userService->create($user);

        $this->assertNotEmpty($response->getEmail());
    }

}
