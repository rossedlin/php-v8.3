<?php

namespace App\EightThree;

interface I {
    const string PHP = 'PHP 8.3';
}

class TypedClassConstants implements I {
    const string PHP = [];
}

// Fatal error: Cannot use array as value for class constant
// Foo::PHP of type string