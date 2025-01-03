<?php
// Question 10: Compare the lengths of two strings
function compareStringLength($str1, $str2) {
    return strlen($str1) === strlen($str2); // Check if lengths of both strings are equal
}
echo compareStringLength("hello", "world") ? "True" : "False"; // Test the function with "hello" and "world"
?>