<?php
// Database connection
$host = "localhost";
$username = "root"; // Replace with your DB username
$password = ""; // Replace with your DB password
$dbname = "user_database";

// Connect to the database
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the username from POST request
$inputUsername = $_POST['username'] ?? '';

// Prepare and execute the query
$sql = "SELECT username FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $inputUsername);
$stmt->execute();
$stmt->store_result();

// Check if username exists
if ($stmt->num_rows > 0) {
    echo "not available";
} else {
    echo "available";
}

// Close the database connection
$stmt->close();
$conn->close();
?>
