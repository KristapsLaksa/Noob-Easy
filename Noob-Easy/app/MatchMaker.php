<?php
namespace App;

class MatchMaker
{
    public static function binder(array $women, array $men)
    {
        $couples = [];
        if (count($women) !== count($men))
        {
            return 'Cupid is on vacation';

        } else {
            foreach ($women as $w)
            {
                $couples[] = [$w, $men[intval(array_search($w, $women))]];
            }
        }
        return $couples;
    }
}