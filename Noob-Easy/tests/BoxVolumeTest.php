<?php

use App\BoxVolume;

test("boxVolume function should return sum of volumes of all boxes", function() {
        expect(BoxVolume :: sum([[4, 2, 4], [3, 3, 3], [1, 1, 2], [2, 1, 1]]))->toEqual(63);
        expect(BoxVolume :: sum([[2, 2, 2], [2, 1, 1]]))->toEqual(10);
        expect(BoxVolume :: sum([[1, 1, 1]]))->toEqual(1);
    });