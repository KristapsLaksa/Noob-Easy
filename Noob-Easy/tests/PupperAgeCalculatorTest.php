<?php
use App\PupperAgeCalculator;

test("pupperAgeCalculator function dog's age in dog years", function(){
        $pupperAgeCalculator = new PupperAgeCalculator();

        expect(PupperAgeCalculator::calculate(1))->toEqual("Your doggie is 7 years old in dog years!");
        expect(PupperAgeCalculator::calculate(10))->toEqual("Your doggie is 70 years old in dog years!");
        expect(PupperAgeCalculator::calculate(15))->toEqual("Your doggie is 105 years old in dog years!");
    });