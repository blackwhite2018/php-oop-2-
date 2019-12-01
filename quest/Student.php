<?php
    declare(strict_types = 1);

    require_once DIR.'/quest/User.php';

    class Student extends User
    {
        private $course;

        public function __construct(string $name) {
            parent::__construct($name);
            $this->course = 1;
        }

        public function transferToNextCourse(): Student {
            if ($this->isTransferToNextCourseCorrect($this->course + 1)) {
                $this->course++;
            }

            return $this;
        }

        public function getCourse(): int {
            return $this->course;
        }

        private function isTransferToNextCourseCorrect(int $course): bool {
            return $course <= 5;
        }
    }