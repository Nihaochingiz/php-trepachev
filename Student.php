<?php

class Student 
{
    public $name;
    public $course;

    public function __construct($name, $course) {
        $this->name = $name;
        $this-> course = $course;
    }
    
    public function transferToNextCourse() {
        $nextCourse = $this->course + 1;
        if ($this->isCourseCorrect($nextCourse)) {
            $this->course- $nextCourse;
            return "Переведен на курс {$this->course}";
        } else  {
            return 'Перевод на следующий курс невозможен, максимальный курс 5.'; 
        }
    }

    private function isCourseCorrect($nextCourse) {
        return $nextCourse < 5;
    }



}

$stepa = new Student('Степа', 2);
echo $stepa->transferToNextCourse();
$studentOnMaxCourse = new Student('Иван', 5);
echo $studentOnMaxCourse->transferToNextCourse();

