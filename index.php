<?php
    declare(strict_types = 1);

    // Режим разработки (development | production)
    define('MODE', 'development');

    // Корневая директория
    define('DIR', __DIR__);

    // Дебагинг (выстрел в ногу)
    require_once DIR.'/lib/debug.php';

    require_once DIR.'/quest/City.php';

    $city = new City('Москва', 11500000, 1147);

    $props = [
        'name',
        'population',
        'foundation'
    ];

    foreach($props as $prop) {
        echo $city->$prop . '<br />';
    }

    
    