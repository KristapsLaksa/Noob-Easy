<?php

namespace App;

class WarOfNumbers
{
    public static function helpWar(array $numbers): string
    {
        $odd = 0;
        $even = 0;
        foreach ($numbers as $number) {
            if ($number % 2 == 0) {
                $even +=$number;
            } else {
                $odd+=$number;
            }
        }
        if ($odd === $even) {
            return "There are no winners";
        } elseif ($odd > $even) {
            return "Odd numbers win by " . ($odd - $even);
        } else {
            return "Even numbers win by " . ($even - $odd);
        }
    }
}