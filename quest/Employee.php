<?php
    declare(strict_types = 1);

    class Employee
    {
        private $name;
        private $age;
        private $salary;

        public function __construct(string $name, int $age, int $salary) {
            $this->name = $name;
            $this->age = $this->isAgeCorrect($age) ? $age : 18;
            $this->salary = $salary;
        }

        public function getName(): string {
            return $this->name;
        }

        public function getAge(): int {
            return $this->age;
        }

        public function getSalary(): int {
            return $this->salary;
        }

        public function doubleSalary(): Employee {
            $this->salary *= 2;

            return $this;
        }

        private function isAgeCorrect(int $age):bool {
            return $age > 18;
        }
    }