<?php

require __DIR__ . '/vendor/autoload.php';

use App\Utils\Greeting;

$greeting = new Greeting();

echo $greeting->sayHello('Adriano') . PHP_EOL;