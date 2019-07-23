<?php


namespace App\Object;


class Calcul
{
    public function scalarSum(int $a, int $b)
    {
        return $a + $b;
    }

    public function sum($a, $b): float
    {
        return $a + $b;
    }
    
    public function sommeTableaux(array ...$tableaux): array
    {
        return array_map(function(array $tableaux): int {
            return array_sum($tableaux);
        }, $tableaux);
    }
}