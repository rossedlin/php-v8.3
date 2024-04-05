<?php

namespace App\EightTwo;

interface I
{
    const PHP = 'PHP 8.2';
}

abstract class A implements I
{
    const PHP = ['version' => '8.2'];
}

class TypedClassConstants extends A
{
    const PHP = 8.2;
}