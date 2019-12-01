<?php
    declare(strict_types = 1);

    class Arr
    {
        private $collection = [];

        public function append(...$params): Arr {
            array_push($this->collection, ...$params);

            return $this;
        }

        public function get(): array {
            return $this->collection;
        }

        public function avg() {
            return array_sum($this->collection) / count($this->collection);
        }
    }