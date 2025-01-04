<?php
// Function to check if a number is divisible by 5
function divisibleByFive($num) {
    // Use modulus operator to check divisibility
    return $num % 5 === 0;
}

// Example: Call the function
echo divisibleByFive(10) ? "True" : "False"; // Outputs: True
?>
