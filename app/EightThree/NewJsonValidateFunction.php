<?php

namespace App\EightThree;

class NewJsonValidateFunction
{
    /**
     * @return bool
     */
    public static function valid(): bool
    {
        return json_validate('{ "test": { "foo": "bar" } }');
    }

    /**
     * @return bool
     */
    public static function notValid(): bool
    {
        return json_validate('{ "test": { foo": "bar" } }');
    }
}
