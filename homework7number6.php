<?php

namespace homework7\classes
class Student {
    public string $name;
    public int $age;
    protected double $gpa;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function setGPA($newGPA) {
        $this->gpa = $newGPA;
    }

    public function getGPA() {
        return $this->gpa;
    }

    public function study(int $hoursStudied) {
        echo $name . " studied for " . $hoursStudied . " hours!";
    }

    public static function dismissAll() {
        echo 'The students have been dismissed!';
    }
}