<?php

$randomizer = new \Random\Randomizer();

echo($randomizer->getBytesFromString('123456789ABCDEF', 6));
echo('<br/>');

echo($randomizer->getInt(10, 99));
echo('<br/>');

echo($randomizer->getFloat(10.0, 99.0));
echo('<br/>');
