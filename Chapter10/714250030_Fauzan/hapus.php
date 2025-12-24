<?php
include("config.php");

if (!isset($_GET['id']) || empty($_GET['id']) || intval($_GET['id']) <= 0) {
    header('Location: list-maba.php');
    exit;
}

$id = intval($_GET['id']);

$sql = "DELETE FROM pendaftaran1 WHERE id = $id";

if (mysqli_query($db, $sql)) {
    header('Location: list-maba.php');
    exit;
} else {
    die("Gagal menghapus data: " . mysqli_error($db));
}
