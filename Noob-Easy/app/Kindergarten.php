<?php

namespace App;

class Kindergarten
{
    public static function translate(string $sentence, string $letter): string
    {
        $translatedArr = [];
        $sentenceSplit = explode(' ', strtolower($sentence));
        foreach ($sentenceSplit as $word) {
            if ($word[0] === $letter) {
                $translatedArr[] = strrev($word);
            } else {
                $translatedArr[] = $word;
            }
        }
        $goodSentence=implode (' ', $translatedArr);
        return ucfirst($goodSentence);
    }
}