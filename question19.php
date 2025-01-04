<?php
// Function to add "if" to the beginning of a string
function addIf($str) {
    // Check if the string already starts with "if"
    return substr($str, 0, 2) === "if" ? $str : "if " . $str;
}

// Example: Call the function
echo addIf("else"); // Outputs: if else
?>
