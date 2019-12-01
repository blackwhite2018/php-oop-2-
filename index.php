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

    $array = [2, 1, 7];
    $arr->append(1, 4, 6)->append(...$array);

    debug($arr->get());