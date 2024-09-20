<?php

class Validator
{

    static function String($string, int $min = 1, int $max = INF): bool
    {
        $trim = trim($string);
        return strlen($trim) >= $min && strlen($trim) <= $max;
    }

    static function Email($email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}