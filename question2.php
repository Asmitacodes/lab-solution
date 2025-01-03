<?php
class Bicycle {
    public $brand;
    public $model;
    public $year;
    public $description = "Used bicycle";
    public $weight; // in grams

    public function __construct($brand, $model, $year, $weight, $description = "Used bicycle") {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->weight = $weight;
        $this->description = $description;
    }

    public function getInfo() {
        return "$this->brand $this->model ($this->year)";
    }

    public function getWeight($inKg = false) {
        if ($inKg) {
            return $this->weight / 1000 . " kg";
        }
        return $this->weight . " g";
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }
}

$bike1 = new Bicycle("Trek", "FX 3", 2020, 12000);
$bike2 = new Bicycle("Specialized", "Sirrus", 2021, 15000);

echo $bike1->getInfo() . "\n";
echo $bike1->getWeight(true) . "\n";
echo $bike1->getWeight() . "\n";

echo $bike2->getInfo() . "\n";
echo $bike2->getWeight(true) . "\n";
echo $bike2->getWeight() . "\n";
