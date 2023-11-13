<?php

namespace App\Libraries;

class MyLibrary
{
    protected static $flashMessages = [];

    public static function set_flash($key, $value)
    {
        self::$flashMessages[$key] = $value;
    }

    public static function get_flash($key)
    {
        if (isset(self::$flashMessages[$key])) {
            $value = self::$flashMessages[$key];
            unset(self::$flashMessages[$key]);
            return $value;
        }
        return null;
    }
}