<?php

declare(strict_types=1);

namespace App\Utils;

class Greeting
{
    const DEFAULT_NAME = 'world';

    public function sayHello(string $name = self::DEFAULT_NAME)
    {
        return sprintf('Olá, %s!', $name);
    }
}
