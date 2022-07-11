<?php
namespace App;

class PupperAgeCalculator
{
    public static function calculate(int $humanAge): string
    {
        return "Your doggie is " . ($humanAge * 7) . " years old in dog years!";

    }
}