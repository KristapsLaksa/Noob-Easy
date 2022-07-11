<?php

namespace App;

class Burglary
{
    public static function stolenItems(array $stolenItems): string
    {
        if (empty($stolenItems)) return "Lucky you!";
        return array_sum($stolenItems);
    }
}