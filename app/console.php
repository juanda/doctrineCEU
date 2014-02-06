<?php

require __DIR__ . '/bootstrap.php';

use Juanda\Comandos\HolaCommand;
use Juanda\Comandos\RellenaTablaUsuariosCommand;


use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new HolaCommand());
$application->add(new RellenaTablaUsuariosCommand());
$application->run();

