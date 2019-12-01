<?php
    declare(strict_types = 1);

    require_once __DIR__.'/quest/Student.php';

    $student = new Student('Коля');

    printf("Курс: %d<br />", $student->getCourse());
    $student->transferToNextCourse();
    printf("Курс: %d<br />", $student->getCourse());
    $student->transferToNextCourse();
    $student->transferToNextCourse();
    $student->transferToNextCourse();
    printf("Курс: %d<br />", $student->getCourse());
    $student->transferToNextCourse();
    printf("Курс: %d<br />", $student->getCourse());
    