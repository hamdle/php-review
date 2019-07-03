<?php

class App {
    // This is a place to register or bind dependencies
    // A registry / storage place
    // When we need to use them we can fetch them from here
    
    protected static $registry = []; // or $items or $keys

    public static function bind($key, $value) {
        static::$registry[$key] = $value;
    }

    public static function get($key) {
        if (!array_key_exists($key, static::$registry)) {
            throw new Exception("No {$key} is bound in the container.");
        }

        return static::$registry[$key];
    }
}