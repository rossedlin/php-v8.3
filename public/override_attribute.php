<?php

class ExtendMe
{
    public static function getMessage()
    {
        return 'Hey you amazing viewer, do not forget to like and subscribe!!!';
    }
}

class NewOverrideAttribute extends ExtendMe
{
    #[\Override]
    public static function getMessage()
    {
        return 'Thanks for liking and subscribing!!';
    }
}

echo NewOverrideAttribute::getMessage();
