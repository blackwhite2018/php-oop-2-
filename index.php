<?php
    declare(strict_types = 1);

    // Режим разработки (development | production)
    define('MODE', 'development');

    // Корневая директория
    define('DIR', __DIR__);

    // Дебагинг (выстрел в ногу)
    require_once DIR.'/lib/debug.php';

    require_once DIR.'/quest/User.php';

    $user = new User('Валерий');

    $methods = [
        'method1' => 'getName',
        'method2' => 'getAge'
    ];

    foreach($methods as $method) {
        echo $user->$method();
    }

    
    