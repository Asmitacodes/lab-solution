<?php

class Bicycle {
    public $brand;
    public $model;
    public $year;
    public $description = "Used bicycle";
    private $weight; // Weight stored in grams

    // Constructor
    public function __construct($brand, $model, $year, $weight, $description = null) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->weight = $weight;
        if ($description) {
            $this->description = $description;
        }
    }

    // Get info about the bike
    public function getInfo() {
        return "$this->brand $this->model ($this->year)";
    }

    // Get weight (grams by default, kilograms if $inKilograms is true)
    public function getWeight($inKilograms = false) {
        if ($inKilograms) {
            return $this->weight / 1000 . " kg";
        }
        return $this->weight . " g";
    }

    // Setter for weight
    public function setWeight($weight) {
        $this->weight = $weight;
    }
}

// Creating objects
$bike1 = new Bicycle("Giant", "Escape 3", 2021, 12000, "Hybrid commuter bike");
$bike2 = new Bicycle("Trek", "Domane SL5", 2022, 8500);

// Display information for Bike 1
echo "Bike 1 Info: " . $bike1->getInfo() . "\n";
echo "Bike 1 Weight: " . $bike1->getWeight(true) . " / " . $bike1->getWeight() . "\n";

// Display information for Bike 2
echo "Bike 2 Info: " . $bike2->getInfo() . "\n";
echo "Bike 2 Weight: " . $bike2->getWeight(true) . " / " . $bike2->getWeight() . "\n";
