<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../auth/login.php");
    exit;
}

include '../config/db.php';

$id = $_POST['id'];

mysqli_query($conn, "DELETE FROM pengaduan WHERE id='$id'");

header("Location: dashboard.php");
exit;
?>