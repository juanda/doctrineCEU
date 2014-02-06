<?php

namespace Juanda\Comandos;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class dameUsuariosCommand extends Command {

    protected function configure() {
        $this
                ->setName('doctrine:dameUsuarios')
                ->setDescription('me da usuarios')
                ->addArgument(
                        'nombre', InputArgument::REQUIRED
                )
                ->setHelp("Esto es la ayuda del comando")
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        global $entityManager;
        
        $nombre = $input->getArgument('nombre');
        
        $repoUsuarios = $entityManager->getRepository('Juanda\Entity\Usuario');        
        
        $usuario = $repoUsuarios->findByNombre($nombre);
        
        if(!$usuario instanceof \Juanda\Entity\Usuario)
        {
            $output->writeln('<error>No existe usuario con nombre ' .  $nombre);
                    
        }
        
        print_r($usuario);
        
        
    }

}

?>
