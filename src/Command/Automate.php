<?php


namespace App\Command;

use App\Object\SevenZero;
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
        $sevenZero = new SevenZero();

        //Scalar type declarations
        $output->writeln($sevenZero->scalarSum(1, 5));

        //Return type declarations
        $output->writeln($sevenZero->sum(1, 2));
        $output->writeln($sevenZero->sommeTableaux([1,2,3], [4,5,6], [7,8,9]));

        //Null coalescing operator
        $identifiant = $_GET['utilisateur'] ?? 'Nothing';
        $output->writeln($identifiant);

        $identifiant = $_GET['utilisateur'] ?? $_POST['utilisateur'] ?? 'Nothing';
        $output->writeln($identifiant);

        //Spaceship operator
        $output->writeln(1 <=> 1);
        $output->writeln(1 <=> 2);
        $output->writeln(2 <=> 1);
    }
}
