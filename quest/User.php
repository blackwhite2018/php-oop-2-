<?php
    declare(strict_types = 1);

    class User
    {
        public $name;
        public $age;

        public function setAge(int $age): User {
            if ($this->checkAge($age)) {
                $this->age = $age;
            }

            return $this;
        }

        public function checkAge(int $age): bool {
            return $age >= 18;
        }
    }