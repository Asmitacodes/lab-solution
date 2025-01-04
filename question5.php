<?php

// Interface definition
interface HasInfo {
    public function getInfo();
}

// Address class implementing HasInfo
class Address implements HasInfo {
    public $street;
    public $number;
    public $city;

    // Constructor to set properties
    public function __construct($street, $number, $city) {
        $this->street = $street;
        $this->number = $number;
        $this->city = $city;
    }

    // Implement getInfo() method
    public function getInfo() {
        return "Address: Street $this->street, Number $this->number, City $this->city";
    }
}

// Phone class implementing HasInfo
class Phone implements HasInfo {
    public $prefix;
    public $number;

    // Constructor to set properties
    public function __construct($prefix, $number) {
        $this->prefix = $prefix;
        $this->number = $number;
    }

    // Implement getInfo() method
    public function getInfo() {
        return "Phone: $this->prefix / $this->number";
    }
}

// User class implementing HasInfo
class User implements HasInfo {
    public $name;
    public $surname;
    private $address;
    private $phone;

    // Constructor to set properties
    public function __construct($name, $surname, Address $address, Phone $phone) {
        $this->name = $name;
        $this->surname = $surname;
        $this->address = $address;
        $this->phone = $phone;
    }

    // Implement getInfo() method
    public function getInfo() {
        $addressInfo = $this->address->getInfo();
        $phoneInfo = $this->phone->getInfo();
        return "User: $this->name $this->surname\n$addressInfo\n$phoneInfo";
    }
}

// Create objects
$address = new Address("Main St", 123, "Toronto");
$phone = new Phone("+1", "9876543210");
$user = new User("John", "Doe", $address, $phone);

// Display information
echo "Address Info:\n" . $address->getInfo() . "\n\n";
echo "Phone Info:\n" . $phone->getInfo() . "\n\n";
echo "User Info:\n" . $user->getInfo() . "\n";
