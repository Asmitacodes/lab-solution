<?php
// Function to add the last character of a string at the front and back
function addLastChar($str) {
    $lastChar = substr($str, -1); // Extract the last character of the string
    return $lastChar . $str . $lastChar; // Add it to the front and back
}

// Example: Call the function
echo addLastChar("Red"); // Outputs: dRedd
?>
