<?php
use App\RockPaper;

test("rockPaperScissors function should return the winner of the game or 'Tie!' when there is no winner ", function() {
        expect(RockPaper::play([["R", "P"], ["R", "S"], ["S", "P"]]))->toEqual("Abigail");
        expect(RockPaper::play([["R", "R"], ["S", "S"]]))->toEqual("Tie!");
        expect(RockPaper::play([["R", "P"], ["R", "P"], ["P", "R"]]))->toEqual("Benson");
    });