<?php
    declare(strict_types = 1);

    class Student
    {
        private $name;
        private $course;

        public function __construct(string $name) {
            $this->name = $name;
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