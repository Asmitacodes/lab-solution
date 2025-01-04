<?php
// Function to add the first three characters of a string at the front and back
function addFirstThreeChars($str) {
    $substr = strlen($str) < 3 ? $str : substr($str, 0, 3); // Get the first 3 characters
    return $substr . $str . $substr; // Add it to the front and back
}

// Example: Call the function
echo addFirstThreeChars("Python"); // Outputs: PytPythonPyt
?>
