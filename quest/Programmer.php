<?php
    declare(strict_types = 1);

    require_once DIR.'/quest/Employee.php';

    class Programmer extends User
    {
        private $langs = [];

        public function __construct(string $name, int $age, int $salary) {
            parent::_construct($name, $age, $salary);
        }

        public function getLangs(): array {
            return $this->langs;
        }

        public function setLangs(string $lang): Programmer {
            $this->langs[] = $lang;
        }
    }