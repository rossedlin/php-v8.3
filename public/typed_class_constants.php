<?php

interface F
{
    const float PHP = 8.3;
}

abstract class A implements F
{
    const float PHP = 8.33;
}

class TypedClassConstants extends A
{
    const float PHP = 8.3;
}

var_dump(TypedClassConstants::PHP);
