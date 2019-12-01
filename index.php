<?php
    declare(strict_types = 1);

    require_once __DIR__.'/quest/Employee.php';

    $employee1 = new Employee();
    $employee1 -> name   = 'Иван';
    $employee1 -> age    = 25;
    $employee1 -> salary = 1000;

    $employee2 = new Employee();
    $employee2 -> name   = 'Вася';
    $employee2 -> age    = 26;
    $employee2 -> salary = 2000;

    printf("%d<br />", $employee1->salary + $employee2->salary);
    printf("%d", $employee1->age + $employee2->age);