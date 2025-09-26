<?php

require __DIR__ . '/vendor/autoload.php';

use App\Services\UserService;

$greeting = new UserService();

echo $greeting->welcome('Adriano') . PHP_EOL;
