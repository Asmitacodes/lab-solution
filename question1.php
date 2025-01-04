<?php

// Interface definition
interface Vehicle {
    public function startEngine();
    public function stopEngine();
}

// Base Car class
class Car implements Vehicle {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Getter and Setter for make
    public function getMake() {
        return $this->make;
    }

    public function setMake($make) {
        $this->make = $make;
    }

    // Getter and Setter for model
    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    // Getter and Setter for year
    public function getYear() {
        return $this->year;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    // Methods
    public function start() {
        echo "Car started.\n";
    }

    public function displayInfo() {
        echo "Make: $this->make, Model: $this->model, Year: $this->year\n";
    }

    public function startEngine() {
        echo "Engine started.\n";
    }

    public function stopEngine() {
        echo "Engine stopped.\n";
    }

    public function getDescription() {
        return "This is a car.";
    }
}

// ElectricCar class extending Car
class ElectricCar extends Car {
    private $batteryCapacity;

    public function __construct($make, $model, $year, $batteryCapacity) {
        parent::__construct($make, $model, $year);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function charge() {
        echo "Car is charging. Battery capacity: $this->batteryCapacity kWh.\n";
    }

    public function getDescription() {
        return "This is an electric car with a battery capacity of $this->batteryCapacity kWh.";
    }
}

// Usage
$car = new Car("Toyota", "Camry", 2022);
$car->start();
$car->displayInfo();
echo $car->getDescription() . "\n";

$electricCar = new ElectricCar("Tesla", "Model S", 2023, 100);
$electricCar->start();
$electricCar->displayInfo();
$electricCar->charge();
echo $electricCar->getDescription() . "\n";
