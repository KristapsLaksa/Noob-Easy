<?php

Namespace App;

class SecretSociety
{
    static function secretNames(array $names): string
    {
        foreach ($names as $name) {
            $secretName [] = substr($name, 0, 1);
        }
        sort($secretName);
        return implode($secretName);
    }
};
