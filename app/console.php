<?php

require __DIR__ . '/bootstrap.php';

use Juanda\Comandos\HolaCommand;
use Juanda\Comandos\RellenaTablaUsuariosCommand;
use Juanda\Comandos\dameUsuariosCommand;
use Juanda\Comandos\ejercicio5Command;

use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new HolaCommand());
$application->add(new RellenaTablaUsuariosCommand());
$application->add(new dameUsuariosCommand());
$application->add(new ejercicio5Command());
$application->add(new Juanda\Comandos\asociacionesCommand());
$application->run();

