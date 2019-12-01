<?php
    declare(strict_types = 1);

    require_once DIR.'/quest/User.php';

    class Employee extends User
    {
        private $salary;

        public function __construct(string $name, int $age, int $salary) {
            parent::__construct($name, $age);
            $this->salary = $salary;
        }

        public function getSalary(): int {
            return $this->salary;
        }

        public function setSalary(int $salary): Employee {
            $this->salary = $salary;
        }
    }