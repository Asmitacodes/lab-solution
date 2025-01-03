<?php
// Question 9: Calculate football team points
function calculatePoints($wins, $draws, $losses) {
    return $wins * 3 + $draws * 1 + $losses * 0; // Calculate points based on results
}
echo calculatePoints(10, 5, 2); // Test the function with 10 wins, 5 draws, and 2 losses
?>