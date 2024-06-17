<?php

class Cookie {
    public static function set($key,string $value, int $expire) {
        setcookie($key, $value, $expire);
    }

    public static function get($key) {
        return $_COOKIE[$key] ?? null;
    }
}

