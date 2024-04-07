<?php

$randomizer = new \Random\Randomizer();

/**
 * Useful for making HEX Colors
 */
echo($randomizer->getBytesFromString('123456789ABCDEF', 6));

/**
 * Useful for betting applications
 */
echo($randomizer->getInt(10, 99));
echo($randomizer->getFloat(10.0, 99.0));
print_r([
    $randomizer->nextFloat(),
    $randomizer->nextFloat(),
    $randomizer->nextFloat(),
    $randomizer->nextFloat(),
]);
