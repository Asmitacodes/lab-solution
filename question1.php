<?php
// Declare variables of different datatypes
$stringVar = "Hello World"; // String datatype
$intVar = 42; // Integer datatype
$floatVar = 3.14; // Float datatype
$boolVar = true; // Boolean datatype
$arrayVar = ["Apple", "Banana", "Cherry"]; // Array datatype

// Print using echo and print
echo $stringVar . "\n"; // Outputs the string value
print($intVar . "\n"); // Outputs the integer value
echo $floatVar . "\n"; // Outputs the float value
echo ($boolVar ? "True\n" : "False\n"); // Outputs True or False based on boolean value

// Display array content using print_r
print_r($arrayVar); // Outputs the array in a readable format

// Display detailed information about the array using var_dump
var_dump($arrayVar); // Outputs data type and value of each array element

// Check and display the datatype of variables
var_dump(is_string($stringVar)); // Checks if the variable is a string
var_dump(is_int($intVar)); // Checks if the variable is an integer
var_dump(is_float($floatVar)); // Checks if the variable is a float
var_dump(is_bool($boolVar)); // Checks if the variable is a boolean
?>
