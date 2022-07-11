<?php

use App\SecretSociety;

test("secretSociety function should return a string of first letters from array items", function() {
    $secretSociety = new SecretSociety();

        expect(SecretSociety::secretNames(["Adam", "Sarah", "Malcolm"]))->toEqual("AMS");
        expect(SecretSociety::secretNames(["Harry", "Newt", "Luna", "Cho"]))->toEqual("CHLN");
        expect(SecretSociety::secretNames(["Phoebe", "Chandler", "Rachel", "Ross", "Monica", "Joey"]))->toEqual("CJMPRR");
    });


