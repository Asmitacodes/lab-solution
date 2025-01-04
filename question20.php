<?php
// Function to create four copies of the first two characters of a string
function fourCopies($str) {
    if (strlen($str) < 2) {
        return $str; // Return original string if length < 2
    }
    $substr = substr($str, 0, 2); // Get the first two characters
    return str_repeat($substr, 4); // Repeat the substring 4 times
}

// Example: Call the function
echo fourCopies("C Sharp"); // Outputs: C SC SC SC S
?>
