<?php

namespace App;

class PeelTheOnion
{
    public static function peel(array $onion): array
    {
        $peeled = [];
        array_shift($onion);
        array_pop($onion);

        foreach ($onion as $layer) {
            array_shift($layer);
            array_pop($layer);

            $peeled[] = $layer;

        }
        return $peeled;
    }
}
