<?php

use App\Burglary;

test("burglary function should return the total value of stolen items", function(){
        expect(Burglary::stolenItems(['tv'=> 30, 'skate'=> 20, 'stereo'=>50] ))->toEqual(100);
        expect(Burglary::stolenItems([ 'painting'=> 20000 ]))->toEqual(20000);
        expect(Burglary::stolenItems([ 'ring'=> 250, 'necklace'=> 500] ))->toEqual(750);
    });
    test("should return a string 'Lucky you!', if nothing was stolen", function(){
        expect(Burglary::stolenItems([]))->toEqual("Lucky you!");
    });