<?php

namespace Tests\Services;

use App\Services\UserService;
use PHPUnit\Framework\TestCase;

class UserServiceTest extends TestCase
{
    protected UserService $userService;

    public function setUp(): void
    {
        parent::setUp();

        $this->userService = new UserService();
    }

    /**
     * @test
     * @return void
     */
    public function testSayHelloWithName(): void
    {
        $this->assertSame('Olá, Sandy e Junior Silva!', $this->userService->welcome('Sandy e Junior Silva'));
    }
}
