<?php

use App\DoubleTrouble;

test("doubleTrouble function should remove duplicate values from array", function()  {
        expect(DoubleTrouble::trouble(["John", "Taylor", "John"]))->toEqual(["John", "Taylor"]);
        expect(DoubleTrouble::trouble(["Ann", "Ann", "Ann"]))->toEqual(["Ann"]);
        expect(DoubleTrouble::trouble(["John", "Taylor"]))->toEqual(["John", "Taylor"]);
    });