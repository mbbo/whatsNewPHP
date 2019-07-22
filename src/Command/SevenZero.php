<?php


namespace App\Command;

use App\Definition\Logger;
use App\Object\LoggerEmpty;
use App\Object\Calcul;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class SevenZero extends Command
{
    public function configure()
    {
        $this->setName('sevenZero')
            ->setDescription('Some PHP 7.0 new features');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $sevenZero = new Calcul();

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

        //Constant arrays using define()
        define('ANIMALS', [
            'dog',
            'cat',
            'bird'
        ]);
        $output->writeln(ANIMALS[1]);

        //Anonymous classes
        $app = new LoggerEmpty();
        $app->setLogger(new class implements Logger {
            public function log(string $msg) {
                echo $msg;
            }
        });

        var_dump($app->getLogger());

        //Unicode codepoint escape syntax
        echo "\u{aa}";
        echo "\u{0000aa}";
        echo "\u{9999}";
    }
}
