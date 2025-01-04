<?php

class Product {
    private $description;
    private $quantity;
    private $price;

    // Constructor
    public function __construct($description, $quantity, $price) {
        if (!is_string($description)) {
            echo "Error: Description must be a string.\n";
            return;
        }
        if (!is_numeric($quantity) || !is_numeric($price)) {
            echo "Error: Quantity and price must be numbers.\n";
            return;
        }
        $this->description = $description;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    // Getters
    public function getDescription() {
        return $this->description;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getPrice() {
        return $this->price;
    }

    // Setters
    public function setDescription($description) {
        if (is_string($description)) {
            $this->description = $description;
        } else {
            echo "Error: Description must be a string.\n";
        }
    }

    public function setQuantity($quantity) {
        if (is_numeric($quantity)) {
            $this->quantity = $quantity;
        } else {
            echo "Error: Quantity must be a number.\n";
        }
    }

    public function setPrice($price) {
        if (is_numeric($price)) {
            $this->price = $price;
        } else {
            echo "Error: Price must be a number.\n";
        }
    }

    // Calculate total price
    public function calculatePrice() {
        return $this->quantity * $this->price;
    }
}

// Create a Product object
$product = new Product("Laptop", 2, 1500);

// Display properties and total price
echo "Product Details:\n";
echo "Description: " . $product->getDescription() . "\n";
echo "Quantity: " . $product->getQuantity() . "\n";
echo "Price: " . $product->getPrice() . "\n";
echo "Total Price: " . $product->calculatePrice() . "\n";
