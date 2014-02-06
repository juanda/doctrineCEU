<?php

require __DIR__ . '/../vendor/autoload.php';

use Juanda\Comandos\HolaCommand;

use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new HolaCommand());
$application->run();

