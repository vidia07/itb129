<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include '../config/db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'");
$admin = mysqli_fetch_assoc($query);

if ($admin && password_verify($password, $admin['password'])) {
    $_SESSION['admin'] = true;
    header("Location: ../admin/dashboard.php");
    exit;
} else {
    header("Location: login.php");
}
?>