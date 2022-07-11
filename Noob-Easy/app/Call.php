<?php

namespace App;

class Call
{
    public static function echoCave(string $string, int $times): string
    {
        return str_repeat($string, $times);
    }
}