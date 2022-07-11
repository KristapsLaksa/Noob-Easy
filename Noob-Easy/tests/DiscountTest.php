<?php

use App\Discount;

test("discount function should return the final price after the discount", function() {

        expect(Discount::calculate(1500, 50))->toEqual(750);
        expect(Discount::calculate(89, 20))->toEqual(71.2);
        expect(Discount::calculate(100, 75))->toEqual(25);
    });