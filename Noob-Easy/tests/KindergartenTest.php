<?php

use App\Kindergarten;

test("kindergarten function should reverses all the words in a sentence that start with a particular letter", function()  {
        expect(Kindergarten::translate("First nam to walk on the noom", "n"))->toEqual("First man to walk on the moon");
        expect(Kindergarten::translate("reteP ate reppep", "r"))->toEqual("Peter ate pepper");
        expect(Kindergarten::translate("I dekcip delkcip onions for supper", "d"))->toEqual("I picked pickled onions for supper");
    });