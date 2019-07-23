<?php


namespace App\Command;

use App\Object\ConstDemo;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Object\SevenOne as ObjectSevenOne;

class SevenOne extends Command
{
    public function configure()
    {
        $this->setName('sevenOne')
            ->setDescription('Some PHP 7.1 new features');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        //Nullable types
        $sevenOne = new ObjectSevenOne();

        var_dump($sevenOne->testReturn());
        var_dump($sevenOne->testReturn2());
        $sevenOne->testReturn3('elePHPant');
        $sevenOne->testReturn3(null);

        //Void functions
        $a = 1;
        $b = 2;
        var_dump($sevenOne->swap($a, $b), $a, $b);

        //Symmetric array destructuring
        $data = [
            [1, 'Tom'],
            [2, 'Fred'],
         ];

        list($id1, $name1) = $data[0]; // id1 -> 1 and $name1-> Tom

        [$id1, $name1] = $data[0];

        foreach($data as list($id1, $name1)) {
            var_dump("Foreach " . $id1 . " " . $name1);
        }

        foreach($data as [$id1, $name1]) {
            var_dump("Foreach " . $id1 . " " . $name1);
        }

        //Class constant visibility
        $constDemo = new ConstDemo();
        var_dump($constDemo::PUBLIC_CONST_A);

        //Support for keys in list()
        $data = [
            ["id" => 1, "name" => 'Tom'],
            ["id" => 2, "name" => 'Fred'],
        ];

        list("id" => $id1, "name" => $name1) = $data[0];

        ["id" => $id1, "name" => $name1] = $data[0];

        foreach ($data as list("id" => $id1, "name" => $name1)) {
            var_dump("foreach " . $id1 . " " . $name1);
        }
    }
}