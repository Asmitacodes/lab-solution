<?php
// Database connection
$servername = "localhost";
$username = "root"; // Adjust based on your setup
$password = "";     // Adjust based on your setup
$dbname = "user_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the username from POST request
if (isset($_POST['username'])) {
    $user = $conn->real_escape_string($_POST['username']);

    // Query to check if username exists
    $query = "SELECT * FROM users WHERE username = '$user'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "not available";
    } else {
        echo "available";
    }
}

$conn->close();
?>
