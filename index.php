<?php
    declare(strict_types = 1);

    require_once __DIR__.'/quest/Employee.php';

    $employee1 = new Employee;
    $employee1 -> name = 'Вася';
    $employee1 -> age = 20;
    $employee1 -> salary = 1000;

    $employee2 = new Employee;
    $employee2 -> name = 'Петя';
    $employee2 -> age = 21;
    $employee2 -> salary = 2000;
    
    printf("Сумма зарплат: %d", $employee1->getSalary() + $employee2->getSalary());


    require_once __DIR__.'/quest/User.php';

    $user = new User;
    $user->name = 'Коля';
    $user->age = 25;

    $user->setAge(30);

    printf("<br />Возраст: %d", $user->age);

    require_once __DIR__.'/quest/Rectangle.php';

    $rectangle = new Rectangle;
    $rectangle->width = 4;
    $rectangle->height = 6;

    printf("<br />Площадь: %.0f<br />Периметр: %.0f", $rectangle->square(), $rectangle->perimeter());