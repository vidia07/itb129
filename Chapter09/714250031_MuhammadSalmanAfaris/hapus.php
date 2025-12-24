<?php
include "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($db, "DELETE FROM pendaftaran WHERE id='$id'");

    if ($query) {
        header("Location: list-maba.php");
        exit;
    } else {
        die("Gagal hapus data: " . mysqli_error($db));
    }
} else {
    die("ID tidak ditemukan");
}
?>
