<?php
// Function to convert age in years to days
function ageInDays($age) {
    return $age * 365; // Multiply age by 365 (ignoring leap years)
}

// Example: Call the function
echo ageInDays(25); // Outputs: 9125
?>
