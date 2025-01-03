<?php
class Student {
    public $name;
    public $surname;
    public $country;
    private $tuition;
    protected $indexNumber;

    public function helloWorld() {
        return "Hello World";
    }

    protected function helloFamily() {
        return "Hello Family";
    }

    private function helloMe() {
        return "Hello me!";
    }

    private function getTuition() {
        return $this->tuition;
    }
}

class PartTimeStudent extends Student {
    public function helloParent() {
        return $this->helloFamily();
    }
}

$student = new Student();
$student->name = "John";
$student->surname = "Doe";
echo $student->helloWorld() . "\n";

$partTimeStudent = new PartTimeStudent();
echo $partTimeStudent->helloParent() . "\n";
