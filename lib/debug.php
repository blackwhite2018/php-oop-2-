<?php
    declare(strict_types = 1);

    if (isDevelopment()) {
        error_reporting(E_ALL);
        ini_set('display_errors', 'On');
    } else {
        error_reporting(0);
        ini_set('display_errors', 'Off');
    }

    function debug($value) {
        if (isDevelopment()) {
            echo '<pre>', var_dump($value), '</pre>';
        }
    }

    function isDevelopment() {
        return MODE == 'development';
    }