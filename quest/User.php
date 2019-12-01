<?php
    declare(strict_types = 1);

    class User
    {
        private $name;
        private $age;

        public function __construct(string $name, int $age = 18) {
            $this->name = $name;
            $this->setAge($age);
        }

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

        public function getName(): string {
            return $this->name;
        }

        public function getAge(): int {
            return $this->age;
        }

        private function isAgeCorrect(int $age): bool {
            return $age >= 18 && $age <= 60;
        }
    }