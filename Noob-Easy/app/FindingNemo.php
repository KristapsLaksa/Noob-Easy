<?php

namespace App;

class FindingNemo
{
    public static function find(string $words): string
    {
        $wordsSplit = explode(' ', $words);
        $key = array_search("Nemo", $wordsSplit);
        if ($key !== false) {
            return "I found Nemo at $key!";
        }
        return "I can't find Nemo :(";
    }
}