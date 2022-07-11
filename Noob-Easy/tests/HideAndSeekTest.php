<?php

use App\HideAndSeek;

test("hideAndSeek function should return all lowercase letters", function () {
    $hideAndSeek = new HideAndSeek();

    expect(HideAndSeek::hideAndSeek("UcUNFYGaFYFYGtNUH"))->toEqual("cat");
    expect(HideAndSeek::hideAndSeek("bEEFGBuFBRrHgUHlNFYaYr"))->toEqual("burglar");
    expect(HideAndSeek::hideAndSeek("YFpHUFBrFBYFBYLGBYoEFGBMENT"))->toEqual("pro");
});
