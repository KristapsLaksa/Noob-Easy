<?php
namespace App;

class Cashier
{
    public static function totalPrice(array $basket): float
    {
        $sumArr = [];
        foreach ($basket as $product) {
            $sumArr[] = $product['quantity'] * $product['price'];
        }
        return array_sum($sumArr);
    }
}
