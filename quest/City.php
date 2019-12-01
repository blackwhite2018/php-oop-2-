<?php
    declare(strict_types = 1);

    class City
    {
        public $name;
        public $population;
        public $foundation;

        public function __construct(string $name, int $population, int $foundation) {
            $this->name = $name;
            $this->population = $population;
            $this->foundation = $foundation;
        }

        public function getName(): string {
            return $this->name;
        }

        public function getPopulation(): int {
            return $this->population;
        }
    }