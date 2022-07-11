<?php

namespace App;

class BoxVolume
{
    public static function sum(array $box): int
    {
        $toSum = [];
        foreach ($box as $item) {
            $toSum[] = array_product($item);
        }
        return array_sum($toSum);
    }
}