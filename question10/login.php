<?php
$userid = $_POST['userid'];
$password = $_POST['password'];

// Dummy credentials for demonstration
if ($userid === 'admin' && $password === 'password123') {
    echo 'success';
} else {
    echo 'error';
}
?>
