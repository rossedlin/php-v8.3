<?php

namespace App\EightThree;

class NewRandomizerGetBytesFromStringMethod
{
    public static function run()
    {
        $randomizer = new \Random\Randomizer();

        return '#' . $randomizer->getBytesFromString(
            '123456789ABCDEF',
            6,
        );
    }
}