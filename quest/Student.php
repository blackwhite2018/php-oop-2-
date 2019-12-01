<?php
    declare(strict_types = 1);

    class Student
    {
        private $name;
        private $course = 1;

        public function transferToNextCourse(): Student {
            if ($this->isTransferToNextCourseCorrect($course + 1)) {
                $this->course++;
            }

            return $this;
        }

        private function isTransferToNextCourseCorrect(int $course): bool {
            return $course >= 1 && $course <= 5;
        }
    }