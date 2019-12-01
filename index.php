<?php
    declare(strict_types = 1);

    // Режим разработки (development | production)
    define('MODE', 'development');

    // Корневая директория
    define('DIR', __DIR__);

    // Дебагинг (выстрел в ногу)
    require_once DIR.'/lib/debug.php';

    require_once DIR.'/quest/Employee.php';
    require_once DIR.'/quest/Student.php';

    $employee = new Employee('Вася', 25, 1000);
    echo $employee->getName();

    $student = new Student('Петя');
    echo $student->getName();