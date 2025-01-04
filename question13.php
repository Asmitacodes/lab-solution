<?php
// Function to calculate the area of a triangle or parallelogram
function shapeArea($base, $height, $shape) {
    if ($shape === "triangle") {
        return 0.5 * $base * $height; // Formula for triangle area
    } elseif ($shape === "parallelogram") {
        return $base * $height; // Formula for parallelogram area
    }
    return 0; // Return 0 if the shape is invalid
}

// Example: Call the function
echo shapeArea(10, 5, "triangle"); // Outputs: 25
?>
