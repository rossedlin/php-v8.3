<?php

class DynamicClassConstant
{
    const string WHO_AM_I = 'Ross from Code with Ross';
}

$name = 'WHO_AM_I';

echo(DynamicClassConstant::{$name});
