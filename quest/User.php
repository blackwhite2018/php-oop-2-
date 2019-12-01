<?php
    declare(strict_types = 1);

    class User
    {
        public $name;
        public $age;

        public function show(string $str): string {
            return $str . '!!!';
        }
    }