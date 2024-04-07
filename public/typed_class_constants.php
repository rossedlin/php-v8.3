<?php

interface F
{
    const float PHP = 8.3;
}

abstract class A implements F
{
    const PHP = ['version' => '8.3'];
}

class TypedClassConstants extends A
{
    const PHP = "8.3";
}

var_dump(TypedClassConstants::PHP);
