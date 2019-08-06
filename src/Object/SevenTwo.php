<?php


namespace App\Object;


class sevenTwo
{
    function test(object $obj) : object
    {
        return new \SplQueue();
    }
}