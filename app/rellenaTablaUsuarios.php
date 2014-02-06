<?php

require __DIR__ . '/bootstrap.php';

$faker = Faker\Factory::create('es_ES');

echo $faker->firstname.PHP_EOL;

echo $faker->lastname.PHP_EOL;

echo $faker->name.PHP_EOL;

echo $faker->name.PHP_EOL;

echo $faker->address.PHP_EOL;

echo $faker->address.PHP_EOL;

echo $faker->text.PHP_EOL;


//$usuario = new Juanda\Entity\Usuario();
//
//$usuario->setNombre('Juanda');
//$usuario->setPassword('kakaka');
//$usuario->setBloqueado(false);
//
//$entityManager->persist($usuario);
//
//$entityManager->flush();

