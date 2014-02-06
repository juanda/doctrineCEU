<?php

require __DIR__ . '/bootstrap.php';

$faker = Faker\Factory::create('es_ES');

$password = 'pruebas';

for ($i = 0; $i < 1000; $i++) {
    $date = $faker->dateTimeBetween('-45 years', '-15 years');

    $username = $faker->unique()->username;
    
    $usuario = new Juanda\Entity\Usuario();
    
    $usuario->setNombre($username);
    $usuario->setFechaNacimiento($date);
    $usuario->setBloqueado(false);
    
    $entityManager->persist($usuario);
}

$entityManager->flush();



//$usuario = new Juanda\Entity\Usuario();
//
//$usuario->setNombre('Juanda');
//$usuario->setPassword('kakaka');
//$usuario->setBloqueado(false);
//
//$entityManager->persist($usuario);
//
//$entityManager->flush();

