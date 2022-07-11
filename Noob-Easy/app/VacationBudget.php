<?php

namespace App;

class VacationBudget
{
    public static function calculate(array $persons): string
    {
        $budget = 0;
        foreach ($persons as $person) {
            $budget += $person['budget'];
        }
        return $budget;
    }
}