<?php
    declare(strict_types = 1);

    class User
    {
        private $name;
        private $age;

        public function setAge(int $age): User {
            if ($this->isAgeCorrect($age)) {
                $this->age = $age;
            }

            return $this;
        }

        public function addAge(int $year): User {
            if ($this->isAgeCorrect($age + $year)) {
                $this->age += $year;
            }

            return $this;
        }

        private function isAgeCorrect(int $age): bool {
            return $age >= 18 && $age <= 60;
        }
    }