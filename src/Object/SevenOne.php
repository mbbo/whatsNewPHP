<?php


namespace App\Object;


class SevenOne
{
    public function testReturn(): ?string
    {
        return 'elePHPant';
    }

    public function testReturn2(): ?string
    {
        return null;
    }

    public function testReturn3(?string $name)
    {
        var_dump($name);
    }

    function swap(&$left, &$right): void
    {
        if ($left === $right) {
            return;
        }

        $tmp = $left;
        $left = $right;
        $right = $tmp;
    }
}