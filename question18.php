<?php
// Function to calculate the absolute difference
function absoluteDifference($n) {
    $diff = abs($n - 51); // Calculate absolute difference
    return $n > 51 ? 3 * $diff : $diff; // Triple the difference if n > 51
}

// Example: Call the function
echo absoluteDifference(60); // Outputs: 27
?>
