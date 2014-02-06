<?php

namespace Juanda\Comandos;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class RellenaTablaUsuariosCommand extends Command {

    protected function configure() {
        $this
                ->setName('doctrine:insertUsuarios')
                ->setDescription('Rellena la tabla de usuarios')
                ->addArgument(
                        'numero', InputArgument::OPTIONAL, 300
                )
                ->setHelp("Esto es la ayuda del comando")
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        global $entityManager;
        $faker = \Faker\Factory::create('es_ES');

        $password = 'pruebas';
        
        $numero = $input->getArgument('numero');

        for ($i = 0; $i < $numero; $i++) {
            $date = $faker->dateTimeBetween('-45 years', '-15 years');

            $nombre = $faker->firstname;

            $usuario = new \Juanda\Entity\Usuario();

            $usuario->setNombre($nombre);
            $usuario->setFechaNacimiento($date);
            $usuario->setBloqueado(false);
            $usuario->setPassword($password);
            
            $output->writeln("usuario " . $nombre . " añadido");
            
            $entityManager->persist($usuario);
        }

        $entityManager->flush();
        
        $output->writeln('<info>' . $numero . " usuarios añadidos");
    }

}

?>
