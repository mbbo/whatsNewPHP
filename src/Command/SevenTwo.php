<?php


namespace App\Command;
use App\Definition\classB;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Object\SevenTwo as ObjectSevenTwo;


class SevenTwo extends Command
{
    public function configure()
    {
        $this->setName('sevenTwo')
            ->setDescription('Some PHP 7.2 new features');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $sevenTwo = new ObjectSevenTwo();

        //New object type
        var_dump($sevenTwo->test(new \stdClass()));

        //Parameter type widening
        $b = new classB();
        $b->Test(["blabla"]);
    }
}