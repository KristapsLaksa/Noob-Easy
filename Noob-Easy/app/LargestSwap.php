<?php

namespace App;

class LargestSwap
{
    public static function swap(int $number):bool
    {
        $numberArray = str_split(strval($number));
        $swap = [];
        $swap[] = max($numberArray);
        $swap[] = min($numberArray);
        $swaped = intval(implode('', $swap));
        if($swaped>$number){
            return false;
        } return true;
    }
}