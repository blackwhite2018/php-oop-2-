<?php
    declare(strict_types = 1);

    require_once __DIR__.'/quest/Employee.php';

    $employee1 = new Employee('Вася', 25, 1000);
    $employee2 = new Employee('Петя', 30, 2000);

    printf("Сумма зарплат: %d", $employee1->getSalary() + $employee2->getSalary());