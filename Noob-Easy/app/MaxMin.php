<?php

namespace App;

class MaxMin
{
    public static function findMinMax(array $numbers): array
    {
        $minMax = [];
        $minMax[] = min($numbers);
        $minMax[] = max($numbers);
        return $minMax;
    }
}
