<?php
// Function to convert the last three characters of a string to uppercase
function convertLastThree($str) {
    if (strlen($str) <= 3) {
        return strtoupper($str); // Convert the entire string if length <= 3
    }
    $lastThree = strtoupper(substr($str, -3)); // Get and convert last 3 characters
    return substr($str, 0, -3) . $lastThree; // Concatenate the rest of the string
}

// Example: Call the function
echo convertLastThree("Nepal"); // Outputs: NePAL
?>
