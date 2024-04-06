<?php

namespace App\EightThree;

class NewRandomizerMethods
{
    /**
     * @return string
     */
    public static function getBytesFromString(): string
    {
        $randomizer = new \Random\Randomizer();

        return $randomizer->getBytesFromString('123456789ABCDEF', 6);
    }

    /**
     * @return float
     */
    public static function getFloat(): float
    {
        $randomizer = new \Random\Randomizer();

        return $randomizer->getFloat(10.0, 99.0);
    }

    /**
     * @return array
     */
    public static function nextFloat(): array
    {
        $randomizer = new \Random\Randomizer();

        return [
          $randomizer->nextFloat(),
          $randomizer->nextFloat(),
          $randomizer->nextFloat(),
          $randomizer->nextFloat(),
        ];
    }
}