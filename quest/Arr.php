<?php
    declare(strict_types = 1);

    class Arr
    {
        private $collection = [];

        public function add(array $arr): Arr {
            $this->collection = array_merge($this->collection, $arr);

            return $this;
        }

        public function get(): array {
            return $this->collection;
        }

        public function avg() {
            return array_sum($this->collection) / count($this->collection);
        }
    }