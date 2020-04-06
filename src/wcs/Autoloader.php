<?php

class Autoloader {
    static function register() {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    static function autoload($class_Name) {
        require '../src/wcs/' . $class_Name . '.php';
    }

}
