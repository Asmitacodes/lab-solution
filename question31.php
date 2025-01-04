<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
        }

        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form input[type="submit"] {
            background: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background: #218838;
        }

        .message {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>User Registration</h2>
        <form method="POST">
            <label for="username">Username (Min 8 characters):</label>
            <input type="text" name="username" id="username" required>

            <label for="email">Email Address:</label>
            <input type="email" name="email" id="email" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob" id="dob" required>

            <label for="phone">Phone Number:</label>
            <input type="text" name="phone" id="phone" required>

            <input type="submit" value="Register">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = trim($_POST['username']);
            $email = trim($_POST['email']);
            $dob = trim($_POST['dob']);
            $phone = trim($_POST['phone']);

            $errors = [];

            // Validate username (minimum 8 characters)
            if (strlen($username) < 8) {
                $errors[] = "Username must be at least 8 characters long.";
            }

            // Validate email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email address.";
            }

            // Validate date of birth (must be a valid past date)
            $dobTimestamp = strtotime($dob);
            if (!$dobTimestamp || $dobTimestamp >= time()) {
                $errors[] = "Invalid date of birth. Must be a valid past date.";
            }

            // Validate phone number (must be 10 digits)
            if (!preg_match('/^\d{10}$/', $phone)) {
                $errors[] = "Phone number must be exactly 10 digits.";
            }

            if (empty($errors)) {
                // If validation passes, store the user data
                $userData = "Username: $username, Email: $email, DOB: $dob, Phone: $phone\n";

                // Save data to a file
                $file = 'users.txt';
                file_put_contents($file, $userData, FILE_APPEND);

                echo "<div class='message success'>Registration successful!</div>";
            } else {
                // Display validation errors
                foreach ($errors as $error) {
                    echo "<div class='message error'>$error</div>";
                }
            }
        }
        ?>
    </div>
</body>
</html>
