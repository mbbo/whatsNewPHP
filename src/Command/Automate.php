<?php


namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class Automate extends Command
{
    public function configure()
    {
        $this->setName('sevenZero')
            ->setDescription('PHP 7.0 new features');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("This is my command");
    }
}
