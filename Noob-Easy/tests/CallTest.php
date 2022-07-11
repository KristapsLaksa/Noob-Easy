<?php
use App\Call;

test("echo function should return the given text repeated n times", function() {
        expect(Call ::echoCave ("ab", 3))->toEqual("ababab");
        expect(Call ::echoCave("kiwi", 1))->toEqual("kiwi");
        expect(Call ::echoCave("cherry", 2))->toEqual("cherrycherry");
    });