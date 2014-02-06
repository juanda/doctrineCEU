<?php

require_once __DIR__."/../vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


$isDevMode = true;

$pathMapping = __DIR__ . "/../src/Juanda/Resources/mapping";
$config = Setup::createXMLMetadataConfiguration(array($pathMapping), $isDevMode);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_mysql',
    'dbname' => 'videojuegos',
    'user' => 'root',
    'password' => '123456',
    'host' => 'localhost',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

