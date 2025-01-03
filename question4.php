<?php
class Product {
    private $description;
    private $quantity;
    private $price;

    public function __construct($description, $quantity, $price) {
        if (!is_string($description) || !is_numeric($quantity) || !is_numeric($price)) {
            echo "Error: Invalid input types.\n";
            return;
        }
        $this->description = $description;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function calculatePrice() {
        return $this->quantity * $this->price;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }
}

$product = new Product("Laptop", 2, 1500);
echo $product->calculatePrice() . "\n";
