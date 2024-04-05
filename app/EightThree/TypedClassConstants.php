<?php

namespace App\EightThree;

interface I
{
    const float PHP = 8.3;
}

abstract class A implements I
{
    const PHP = ['version' => '8.3'];
}

class TypedClassConstants extends A
{
    const string PHP = "8.3";
}