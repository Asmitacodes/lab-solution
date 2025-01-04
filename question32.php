<?php
// Database connection
$host = 'localhost';
$user = 'root'; // Replace with your database username
$password = ''; // Replace with your database password
$dbname = 'user_management';

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to handle form submissions and actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'create') {
        // Create a new record
        $name = trim($_POST['name']);
        $rank = trim($_POST['rank']);
        $status = trim($_POST['status']);
        $created_by = 'admin'; // Hardcoded for simplicity
        $updated_by = 'admin'; // Hardcoded for simplicity

        // Image upload handling
        $image = null;
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $imagePath = 'uploads/' . basename($_FILES['image']['name']);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                $image = $imagePath;
            }
        }

        // Insert into database
        $stmt = $conn->prepare("INSERT INTO users (name, rank, status, image, created_by, updated_by) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('ssssss', $name, $rank, $status, $image, $created_by, $updated_by);
        $stmt->execute();
        $stmt->close();
    } elseif ($action === 'update') {
        // Update a record
        $id = $_POST['id'];
        $name = trim($_POST['name']);
        $rank = trim($_POST['rank']);
        $status = trim($_POST['status']);
        $updated_by = 'admin'; // Hardcoded for simplicity

        // Image upload handling
        $image = $_POST['current_image'];
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $imagePath = 'uploads/' . basename($_FILES['image']['name']);
            if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                $image = $imagePath;
            }
        }

        // Update in database
        $stmt = $conn->prepare("UPDATE users SET name=?, rank=?, status=?, image=?, updated_by=? WHERE id=?");
        $stmt->bind_param('sssssi', $name, $rank, $status, $image, $updated_by, $id);
        $stmt->execute();
        $stmt->close();
    } elseif ($action === 'delete') {
        // Delete a record
        $id = $_POST['id'];

        // Delete from database
        $stmt = $conn->prepare("DELETE FROM users WHERE id=?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->close();
    }
}

// Fetch all records
$result = $conn->query("SELECT * FROM users");
$users = $result->fetch_all(MYSQLI_ASSOC);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        .form-container, .table-container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        table th {
            background-color: #007BFF;
            color: white;
        }

        input, select {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="file"] {
            padding: 5px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Add New User</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="create">
            <label>Name:</label>
            <input type="text" name="name" required>
            <label>Rank:</label>
            <input type="text" name="rank" required>
            <label>Status:</label>
            <select name="status" required>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
            <label>Image:</label>
            <input type="file" name="image">
            <input type="submit" value="Add User">
        </form>
    </div>

    <div class="table-container">
        <h2>User List</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Rank</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Created By</th>
                    <th>Updated By</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['rank'] ?></td>
                    <td><?= ucfirst($user['status']) ?></td>
                    <td>
                        <?php if ($user['image']): ?>
                            <img src="<?= $user['image'] ?>" alt="Image" style="width: 50px; height: 50px;">
                        <?php else: ?>
                            No Image
                        <?php endif; ?>
                    </td>
                    <td><?= $user['created_by'] ?></td>
                    <td><?= $user['updated_by'] ?></td>
                    <td><?= $user['created_at'] ?></td>
                    <td><?= $user['updated_at'] ?></td>
                    <td>
                        <form method="POST" style="display: inline-block;">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>">
                            <input type="hidden" name="action" value="delete">
                            <button class="btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
