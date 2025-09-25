<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Utils\Greeting;

class GreetingTest extends TestCase
{
    protected $greeting;

    public function setUp(): void
    {
        parent::setUp();

        $this->greeting = new Greeting();
    }

    /**
     * @test
     * @return void
     */
    public function testSayHelloDefault(): void
    {
        $this->assertStringContainsString('world', $this->greeting->sayHello());
    }

    /**
     * @test
     * @return void
     */
    public function testSayHelloWithName(): void
    {
        $this->assertSame('Olá, Sandy e Junior Silva!', $this->greeting->sayHello('Sandy e Junior Silva'));
    }
}
