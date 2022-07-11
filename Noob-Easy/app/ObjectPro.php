<?php

namespace App;

class ObjectPro
{
    public static function sortArray(array $inputArray): array
    {
        foreach ($inputArray as $arr) {
            $keyArray = array_keys($inputArray);
            $valuesArray = array_values($inputArray);
        }
        $sortedArray[] = $keyArray;
        $sortedArray[] = $valuesArray;
        return $sortedArray;
    }
}