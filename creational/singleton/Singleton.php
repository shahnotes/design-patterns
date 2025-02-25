<?php

class Singleton
{
    private static $instance;

    private function __construct()
    {
        $this->init();
    }

    private function __clone()
    {

    }

    public static function getInstance()
    {
        if ( ! isset(self::$instance)) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    private function init()
    {
        echo "Singleton init" . PHP_EOL;
    }
}

$instance = Singleton::getInstance();
$instance2 = Singleton::getInstance();

print_r($instance === $instance2);
