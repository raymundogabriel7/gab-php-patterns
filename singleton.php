<?php

// Ensures that a class has only one instance and provides a global point of access to it.
class Singleton {
    private static $instance;

    private function __construct() {
        // private constructor to prevent instantiation
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

// Usage
$singletonInstance = Singleton::getInstance();