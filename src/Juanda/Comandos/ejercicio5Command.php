<?php

namespace Juanda\Comandos;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ejercicio5Command extends Command {

    protected function configure() {
        $this
                ->setName('doctrine:ejercicio5')
                ->setDescription('resuelve el ejercicio5')
                ->setHelp("Esto es la ayuda del comando")
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        global $entityManager;
        
        $query = $entityManager
                ->createQuery('SELECT u FROM Juanda\Entity\Usuario u WHERE u.id < 2000 AND u.id> 1500 ');
        
        $usuarios = $query->getResult();
        
        foreach($usuarios as $u){
            $output->writeln($u->getNombre() . " " . $u->getPassword());
        }
    }

}

?>
