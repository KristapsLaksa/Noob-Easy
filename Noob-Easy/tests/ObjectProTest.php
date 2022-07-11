<?php

use App\ObjectPro;

test("objectPro function should return the keys and values of object as separate arrays", function() {
        expect(ObjectPro::sortArray([ 'a'=> 1, 'b'=> 2, 'c'=> 3 ]))->toEqual([["a", "b", "c"], [1, 2, 3]]);
        expect(ObjectPro::sortArray([ 'a'=> "Apple", 'b'=> "Microsoft", 'c'=> "Google" ]))->toEqual([["a", "b", "c"], ["Apple", "Microsoft", "Google"]]);
        expect(ObjectPro::sortArray([ 'key1'=> true, 'key2'=> false, 'key3'=> 'undefined' ]))->toEqual([["key1", "key2", "key3"], [true, false, 'undefined']]);
    });