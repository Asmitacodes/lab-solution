<?php
// Start the session
session_start();

// Predefined credentials
$validUsername = "admin";
$validPassword = "password123";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']); // Get and trim the submitted username
    $password = trim($_POST['password']); // Get and trim the submitted password
    $remember = isset($_POST['remember']); // Check if "Remember Me" is selected

    // Validate the username and password
    if ($username === $validUsername && $password === $validPassword) {
        // Store username in session
        $_SESSION['username'] = $username;

        // If "Remember Me" is checked, set a cookie for 1 day
        if ($remember) {
            setcookie("username", $username, time() + (86400), "/"); // 86400 = 1 day
        }

        echo "<h3 style='color: green;'>Login Successful! Welcome, $username.</h3>";
    } else {
        echo "<h3 style='color: red;'>Invalid Username or Password. Please try again.</h3>";
    }
}

// Handle logout
if (isset($_GET['logout'])) {
    // Destroy the session
    session_destroy();

    // Expire the cookie
    setcookie("username", "", time() - 3600, "/");

    echo "<h3 style='color: blue;'>You have been logged out successfully.</h3>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form with Session and Cookie</title>
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
        input[type="checkbox"] {
            margin-top: 10px;
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
        .logout {
            text-align: center;
            margin: 20px;
        }
    </style>
</head>
<body>

<?php
// Check if the user is already logged in (via session or cookie)
if (isset($_SESSION['username']) || isset($_COOKIE['username'])) {
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['username'];
    echo "<h3 style='color: green;'>Welcome back, $username!</h3>";
    echo "<div class='logout'><a href='?logout=true'>Logout</a></div>";
} else {
?>
    <!-- Login Form -->
    <form method="POST">
        <h2 style="text-align: center;">Login Form</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
        
        <label>
            <input type="checkbox" name="remember"> Remember Me
        </label>
        
        <input type="submit" value="Login">
    </form>
<?php
}
?>

</body>
</html>
