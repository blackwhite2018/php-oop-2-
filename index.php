<?php
    declare(strict_types = 1);

    // Режим разработки (development | production)
    define('MODE', 'development');

    // Корневая директория
    define('DIR', __DIR__);

    // Дебагинг (выстрел в ногу)
    require_once DIR.'/lib/debug.php';

    require_once DIR.'/quest/Arr.php';

    $arr = new Arr;
    $arr->add([1, 2, 1]);
    $arr->add([4, 7, 3]);

    printf("%.2f", $arr->avg());
    