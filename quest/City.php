<?php
    declare(strict_types = 1);

    class City
    {
        private $name;
        private $population;

        public function __construct(string $name, int $population) {
            $this->name = $name;
            $this->population = $population;
        }

        public function getName(): string {
            return $this->name;
        }

        public function getPopulation(): int {
            return $this->population;
        }
    }