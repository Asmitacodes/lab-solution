<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'school_management');
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Handle CRUD actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    if ($action === 'create_course') {
        $stmt = $conn->prepare("INSERT INTO courses (title, duration, status) VALUES (?, ?, ?)");
        $stmt->bind_param('sss', $_POST['title'], $_POST['duration'], $_POST['status']);
        $stmt->execute();
    } elseif ($action === 'create_student') {
        $stmt = $conn->prepare("INSERT INTO students (name, course_id, fee, rollno, phone, address, dob, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('sidsssss', $_POST['name'], $_POST['course_id'], $_POST['fee'], $_POST['rollno'], $_POST['phone'], $_POST['address'], $_POST['dob'], $_POST['status']);
        $stmt->execute();
    } elseif ($action === 'delete_course') {
        $stmt = $conn->prepare("DELETE FROM courses WHERE id=?");
        $stmt->bind_param('i', $_POST['id']);
        $stmt->execute();
    } elseif ($action === 'delete_student') {
        $stmt = $conn->prepare("DELETE FROM students WHERE id=?");
        $stmt->bind_param('i', $_POST['id']);
        $stmt->execute();
    }
}

// Fetch data
$courses = $conn->query("SELECT * FROM courses")->fetch_all(MYSQLI_ASSOC);
$students = $conn->query("SELECT students.*, courses.title AS course_title FROM students INNER JOIN courses ON students.course_id = courses.id")->fetch_all(MYSQLI_ASSOC);
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Operations</title>
    <style>body{font-family:Arial;margin:20px;}table{width:100%;border-collapse:collapse;}th,td{border:1px solid #ddd;padding:10px;text-align:center;}th{background-color:#007BFF;color:white;}form{margin-bottom:20px;}input,select{padding:5px;margin:5px;}button{background-color:red;color:white;padding:5px;}</style>
</head>
<body>
    <!-- Add Course Form -->
    <form method="POST">
        <input type="hidden" name="action" value="create_course">
        <input type="text" name="title" placeholder="Course Title" required>
        <input type="text" name="duration" placeholder="Duration" required>
        <select name="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
        <button type="submit">Add Course</button>
    </form>

    <!-- Add Student Form -->
    <form method="POST">
        <input type="hidden" name="action" value="create_student">
        <input type="text" name="name" placeholder="Student Name" required>
        <select name="course_id">
            <?php foreach ($courses as $course): ?>
                <option value="<?= $course['id'] ?>"><?= $course['title'] ?></option>
            <?php endforeach; ?>
        </select>
        <input type="number" name="fee" placeholder="Fee" required>
        <input type="text" name="rollno" placeholder="Roll No" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="date" name="dob" required>
        <select name="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
        <button type="submit">Add Student</button>
    </form>

    <!-- Courses Table -->
    <h3>Courses</h3>
    <table>
        <tr><th>ID</th><th>Title</th><th>Duration</th><th>Status</th><th>Actions</th></tr>
        <?php foreach ($courses as $course): ?>
            <tr>
                <td><?= $course['id'] ?></td>
                <td><?= $course['title'] ?></td>
                <td><?= $course['duration'] ?></td>
                <td><?= ucfirst($course['status']) ?></td>
                <td>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $course['id'] ?>">
                        <input type="hidden" name="action" value="delete_course">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- Students Table -->
    <h3>Students</h3>
    <table>
        <tr><th>ID</th><th>Name</th><th>Course</th><th>Fee</th><th>Phone</th><th>Actions</th></tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['course_title'] ?></td>
                <td><?= $student['fee'] ?></td>
                <td><?= $student['phone'] ?></td>
                <td>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $student['id'] ?>">
                        <input type="hidden" name="action" value="delete_student">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
