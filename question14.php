<?php
// Function to find the index of a string in an array
function findIndex($arr, $str) {
    // Use array_search to find the index of the string
    return array_search($str, $arr);
}

// Example: Call the function
echo findIndex(["Apple", "Banana", "Cherry"], "Banana"); // Outputs: 1
?>
