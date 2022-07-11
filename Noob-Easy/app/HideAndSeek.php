<?php

namespace App;

class HideAndSeek
{
    public static function hideAndSeek(string $string): string
    {
        $lowercase = [];
        $stringToArray = str_split($string);
        foreach ($stringToArray as $letter) {
            if (ctype_lower($letter)) {
                $lowercase[] = $letter;
            }
        }
        return implode($lowercase);
    }
}