<?php
    declare(strict_types = 1);

    require_once __DIR__.'/quest/User.php';

    $user = new User;

    printf("%s", $user->show('hello, world'));
    