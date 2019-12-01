<?php
    declare(strict_types = 1);

    class Employee
    {
        public $name;
        public $age;
        public $salary;

        public function getName(): string {
            return $this->name;
        }

        public function getAge(): int {
            return $this->age;
        }

        public function getSalary(): int {
            return $this->salary;
        }

        public function checkAge(int $age):bool {
            return $age > 18;
        }

        public function doubleSalary(): Employee {
            $this->salary *= 2;

            return $this;
        }
    }