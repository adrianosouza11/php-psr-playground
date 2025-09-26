<?php

namespace App\Services;

use App\Utils\Greeting;

class UserService
{
    /**
     * @param string $name
     * @return string
     */
    public function welcome(string $name): string
    {
        $greeting = new Greeting();

        return $greeting->sayHello($name);
    }
}
