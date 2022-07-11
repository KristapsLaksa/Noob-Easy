<?php

namespace App;

class DoubleTrouble
{
    public static function trouble(array $list): array
    {
        return  array_values(array_unique($list));

    }
}
