<?php
// Function to calculate the number of cars needed
function carsNeeded($people) {
    // Each car holds 5 people (4 passengers + 1 driver)
    return ceil($people / 5);
}

// Example: Call the function
echo carsNeeded(13); // Outputs: 3
?>
