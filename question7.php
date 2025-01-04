<?php

// Define Shape interface
interface Shape {
    public function calculateArea();
}

// Circle class implementing Shape
class Circle implements Shape {
    private $radius;

    // Constructor to set radius
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implement calculateArea method
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Square class implementing Shape
class Square implements Shape {
    private $side;

    // Constructor to set side length
    public function __construct($side) {
        $this->side = $side;
    }

    // Implement calculateArea method
    public function calculateArea() {
        return pow($this->side, 2);
    }
}

// Create a Circle object
$circle = new Circle(5); // Radius = 5
echo "Circle Area (Radius = 5): " . $circle->calculateArea() . "\n";

// Create a Square object
$square = new Square(4); // Side = 4
echo "Square Area (Side = 4): " . $square->calculateArea() . "\n";
