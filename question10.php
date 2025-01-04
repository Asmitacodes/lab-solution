<?php
// Function to compare the lengths of two strings
function compareStringLength($str1, $str2) {
    return strlen($str1) === strlen($str2); // Compare lengths using strlen()
}

// Example: Call the function
echo compareStringLength("Hello", "World") ? "True" : "False"; // Outputs: True
?>
