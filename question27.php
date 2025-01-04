<?php
// Predefined credentials for login validation
$validUsername = "admin";
$validPassword = "password123";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']); // Get the submitted username and remove spaces
    $password = trim($_POST['password']); // Get the submitted password and remove spaces

    // Validate the username and password
    if ($username === $validUsername && $password === $validPassword) {
        echo "<h3 style='color: green;'>Login Successful! Welcome, $username.</h3>";
    } else {
        echo "<h3 style='color: red;'>Invalid Username or Password. Please try again.</h3>";
    }
}
?>

<!-- HTML Form for Login -->
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 50px;
        }
        form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h2 style="text-align: center;">Login Form</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>
