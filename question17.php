<?php
// Function to compute the sum or triple the sum if the numbers are the same
function sumOrTriple($a, $b) {
    // Check if the numbers are the same
    return $a === $b ? 3 * ($a + $b) : $a + $b;
}

// Example: Call the function
echo sumOrTriple(10, 10); // Outputs: 60
?>
