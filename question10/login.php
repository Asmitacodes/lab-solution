<?php
// Example login credentials
$validUserId = "admin";
$validPassword = "password123";

// Get POST data
$userid = $_POST['userid'] ?? '';
$password = $_POST['password'] ?? '';

// Check credentials
if ($userid === $validUserId && $password === $validPassword) {
    echo "success";
} else {
    echo "error";
}
?>
