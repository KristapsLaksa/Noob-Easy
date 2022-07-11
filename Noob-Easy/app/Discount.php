<?php

namespace App;

class Discount
{
    public static function calculate(int $price, int $discount):float
    {
        return $price-($price*($discount/100));
    }
}
