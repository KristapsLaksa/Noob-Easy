<?php
use App\MatchMaker;

test("matchMaker function should return a new array of arrays with couples, if given array sizes match and 'Cupid is on vacation' if not ", function()  {
        expect(MatchMaker::binder(["Elise", "Mary"], ["John", "Rick"]))->toEqual([["Elise", "John"], ["Mary", "Rick"]]);
        expect(MatchMaker::binder(["Ana", "Amy", "Lisa"], ["Bob", "Josh"]))->toEqual("Cupid is on vacation");
        expect(MatchMaker::binder(["Ana", "Amy", "Lisa"], ["Bob", "Josh", "Tim"]))->toEqual([["Ana", "Bob"], ["Amy", "Josh"],["Lisa", "Tim"]]);
    });