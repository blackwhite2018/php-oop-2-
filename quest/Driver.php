<?php
    declare(strict_types = 1);

    require_once DIR.'/quest/Employee.php';

    class Programmer extends User
    {
        private $experience;
        private $drivingCategory;

        public function __construct(string $name, int $age, int $salary) {
            parent::_construct($name, $age, $salary);
        }

        public function getExperience(): array {
            return $this->experience;
        }

        public function setExperience(string $experience): Programmer {
            $this->experience = $experience;
        }

        public function getDrivingCategory(): array {
            return $this->drivingCategory;
        }

        public function setDrivingCategory(string $drivingCategory): Programmer {
            $this->drivingCategory = $drivingCategory;
        }
    }