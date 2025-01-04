<?php
// Function to calculate power using voltage and current
function calculatePower($voltage, $current) {
    return $voltage * $current; // Formula: Power = Voltage × Current
}

// Example: Call the function
echo calculatePower(220, 10); // Outputs: 2200
?>
