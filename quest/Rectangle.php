<?php
    declare(strict_types = 1);

    class Rectangle
    {
        public $width;
        public $height;

        public function square(): float {
            return $this->width * $this->height;
        }

        public function perimeter(): float {
            return ($this->width + $this->height) * 2;
        }
    }