<?php
// Function to get the value at a specific index in an array
function getValueAtIndex($arr, $index) {
    // Use the index to fetch the value, or return null if it doesn't exist
    return $arr[$index] ?? null;
}

// Example: Call the function
echo getValueAtIndex(["Apple", "Banana", "Cherry"], 2); // Outputs: Cherry
?>
