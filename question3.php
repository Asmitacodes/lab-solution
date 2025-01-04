<?php

class Student {
    public $name;
    public $surname;
    public $country;
    private $tuition = 1000; // Example value
    protected $indexNumber;

    // Public method
    public function helloWorld() {
        return "Hello World";
    }

    // Protected method
    protected function helloFamily() {
        return "Hello Family";
    }

    // Private method
    private function helloMe() {
        return "Hello me!";
    }

    // Private getter for tuition
    private function getTuition() {
        return "Tuition: $this->tuition";
    }

    // Method to access private tuition getter
    public function showTuition() {
        return $this->getTuition();
    }
}

class PartTimeStudent extends Student {
    // Public method calling parent's protected method
    public function helloParent() {
        return $this->helloFamily();
    }
}

// Create objects
$student = new Student();
$partTimeStudent = new PartTimeStudent();

// Call methods for Student object
echo "Student Methods:\n";
echo $student->helloWorld() . "\n";
echo $student->showTuition() . "\n";

// Call methods for PartTimeStudent object
echo "\nPartTimeStudent Methods:\n";
echo $partTimeStudent->helloWorld() . "\n";
echo $partTimeStudent->helloParent() . "\n";
