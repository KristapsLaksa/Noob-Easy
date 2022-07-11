<?php
namespace App;

class DigitalClock
{
    public static function formatTime(int $seconds):string{
        return gmdate("H:i:s", $seconds);
    }
}