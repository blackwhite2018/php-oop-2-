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
    $user->setAge(21);

    printf("<br />Возраст: %d", $user->age);