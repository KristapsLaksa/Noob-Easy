<?php

use App\DigitalClock;

test("digitalClock function should convert seconds to a time string in format hh:mm:ss", function()  {
        expect(DigitalClock::formatTime(5025))->toEqual("01:23:45");
        expect(DigitalClock::formatTime(61201))->toEqual("17:00:01");
        expect(DigitalClock::formatTime(87000))->toEqual("00:10:00");
    });