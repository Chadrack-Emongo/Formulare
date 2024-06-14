<?php

require 'HTMLElement.php';
class Cookie {
    public static function set($key, $value, $expire) {
        setcookie($key, $value, $expire);
    }

    public static function get($key) {
        return $_COOKIE[$key] ?? null;
    }
}
