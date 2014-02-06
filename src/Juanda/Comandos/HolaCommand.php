<?php

namespace Juanda\Comandos;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class HolaCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('demo:hola')
            ->setDescription('Digo Hola')
            ->addArgument(
                'nombre',
                InputArgument::OPTIONAL,
                'A quien le digo hola?'
            )
                ->setHelp("Esto es la ayuda del comando")
            ->addOption(
               'yell',
               null,
               InputOption::VALUE_NONE,
               'If set, the task will yell in uppercase letters'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
       $dialog = $this->getHelperSet()->get('dialog');
        
        $name = $dialog->ask(
                $output, 'Please enter your name: ', 'Pepe'
        );

        $output->writeln('<info>Hello ' . $name . '</info>');
    }
}
?>
