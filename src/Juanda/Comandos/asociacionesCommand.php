<?php

namespace Juanda\Comandos;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class asociacionesCommand extends Command {

    protected function configure() {
        $this
                ->setName('doctrine:asociaciones')
                ->setHelp("Esto es la ayuda del comando")
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        global $entityManager;


        $etiqueta = new \Juanda\Entity\Etiqueta();
        $etiqueta->setNombre('etiqueta 1 texto');
        $etiqueta->setColor('rojo');

        $etiqueta2 = new \Juanda\Entity\Etiqueta();
        $etiqueta2->setNombre('etiqueta 2 texto');
        $etiqueta2->setColor('verde');

        $etiqueta3 = new \Juanda\Entity\Etiqueta();
        $etiqueta3->setNombre('etiqueta 3 texto');
        $etiqueta3->setColor('amarillo');
        
        $usuario = new \Juanda\Entity\Usuario();
        $usuario->setUsername('juanito');
       
        $etiqueta->setUsuario($usuario);
        $etiqueta2->setUsuario($usuario);
        $etiqueta3->setUsuario($usuario);
        
        $entityManager->persist($usuario); 
        $entityManager->persist($etiqueta);
        $entityManager->persist($etiqueta2);
        $entityManager->persist($etiqueta3);
        
        $entityManager->flush();
        
        var_dump($etiqueta);
        var_dump($etiqueta2);
        var_dump($etiqueta3);
        
        
    }

}

?>
