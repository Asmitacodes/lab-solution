<?php
// Question 1a: Create variables with different datatypes
$intVar = 10; // Integer variable
$floatVar = 10.5; // Float variable
$stringVar = "Hello"; // String variable
$arrayVar = array(1, 2, 3); // Array variable

// Question 1a: Print all the data using echo and print
echo $intVar; 
print $floatVar; 

// Question 1b: Display content of array using print_r and var_dump
print_r($arrayVar); 
var_dump($stringVar); 

// Question 1c: Display result of checking data types
echo is_int($intVar) ? 'Integer' : 'Not an Integer'; 
echo is_float($floatVar) ? 'Float' : 'Not a Float'; 
echo is_string($stringVar) ? 'String' : 'Not a String';
echo is_array($arrayVar) ? 'Array' : 'Not an Array'; 
?>
