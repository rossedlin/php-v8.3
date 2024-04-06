<?php

namespace App\EightThree;


class ExtendMe
{
    #[\Override]
    public static function YouMustOverrideMe()
    {

    }
}

class NewOverrideAttribute extends ExtendMe
{
    /**
     * @return string
     */
    public static function JustATestDoNotPanic(): string
    {
        return 'I said do not panic!!!';
    }
}
