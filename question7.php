<?php
// Question 7: Calculate power using voltage and current
function calculatePower($voltage, $current) {
    return $voltage * $current; // Use the formula power = voltage * current
}
echo calculatePower(220, 10); // Test the function with voltage 220V and current 10A
?>