<?php

namespace App\EightTwo;

interface I {
    // We may naively assume that the PHP constant is always a string.
    const PHP = 'PHP 8.2';
}

class TypedClassConstants implements I {
    // But implementing classes may define it as an array.
    const PHP = [];
}
