<?php

// User class
class User {
    protected $name;
    protected $surname;
    protected $username;
    protected $is_admin = false; // Default to false

    // Constructor to initialize properties
    public function __construct($name, $surname, $username) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    // Check if the user is an admin
    public function isAdmin() {
        return $this->is_admin;
    }

    // Print full name
    public function getFullName() {
        $adminTag = $this->is_admin ? " (admin)" : "";
        return "$this->name $this->surname$adminTag";
    }
}

// Customer class extending User
class Customer extends User {
    private $city;
    private $state;
    private $country;

    // Setter for location properties
    public function setLocation($city, $state, $country) {
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    // Getter for location
    public function location() {
        return "$this->city, $this->state, $this->country";
    }
}

// AdminUser class extending User
class AdminUser extends User {
    // Constructor sets is_admin to true
    public function __construct($name, $surname, $username) {
        parent::__construct($name, $surname, $username);
        $this->is_admin = true;
    }
}

// Create a User object
$user = new User("John", "Smith", "johnsmith");
echo "User Info:\n";
echo "Full Name: " . $user->getFullName() . "\n";
echo "Is Admin: " . ($user->isAdmin() ? "Yes" : "No") . "\n\n";

// Create a Customer object
$customer = new Customer("Jane", "Doe", "janedoe");
$customer->setLocation("Toronto", "Ontario", "Canada");
echo "Customer Info:\n";
echo "Full Name: " . $customer->getFullName() . "\n";
echo "Is Admin: " . ($customer->isAdmin() ? "Yes" : "No") . "\n";
echo "Location: " . $customer->location() . "\n\n";

// Create an AdminUser object
$admin = new AdminUser("Alice", "Johnson", "aliceadmin");
echo "AdminUser Info:\n";
echo "Full Name: " . $admin->getFullName() . "\n";
echo "Is Admin: " . ($admin->isAdmin() ? "Yes" : "No") . "\n";
