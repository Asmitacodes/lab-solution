<?php
interface Shape {
    public function calculateArea();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }
}

class Square implements Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        return pow($this->side, 2);
    }

    public function getSide() {
        return $this->side;
    }

    public function setSide($side) {
        $this->side = $side;
    }
}

// Example Usage
$circle = new Circle(5);
echo "Circle with radius " . $circle->getRadius() . " has area: " . $circle->calculateArea() . "\n";

$square = new Square(4);
echo "Square with side " . $square->getSide() . " has area: " . $square->calculateArea() . "\n";
