<?php
    declare(strict_types = 1);

    require_once __DIR__.'/quest/City.php';

    $cityes = [
        new City('Москва', 11000000),
        new City('Санкт-Петербург', 5000000),
        new City('Новосибирск', 1500000),
        new City('Екатеринбург', 1350000),
        new City('Нижний Новгород', 1250000)
    ];

    foreach($cityes as $city) {
        printf("Наименование: %s, население: %d<br />", $city->getName(), $city->getPopulation());
    }
    