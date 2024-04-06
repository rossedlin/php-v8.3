<?php

namespace App\EightTwo;

class NewJsonValidateFunction
{
    /**
     * @return bool
     */
    public static function valid(): bool
    {
        return self::json_validate('{ "test": { "foo": "bar" } }');
    }

    /**
     * @return bool
     */
    public static function notValid(): bool
    {
        return self::json_validate('{ "test": { foo": "bar" } }');
    }

    /**
     * @param string $string
     *
     * @return bool
     */
    private static function json_validate(string $string): bool
    {
        json_decode($string);

        return json_last_error() === JSON_ERROR_NONE;
    }
}
