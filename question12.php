<?php
// Recursive function to calculate the length of a string
function recursiveStringLength($str) {
    // Base case: if the string is empty, return 0
    if ($str === "") {
        return 0;
    }
    // Recursive case: shorten the string and add 1 to the count
    return 1 + recursiveStringLength(substr($str, 1));
}

// Example: Call the function
echo recursiveStringLength("Hello"); // Outputs: 5
?>
