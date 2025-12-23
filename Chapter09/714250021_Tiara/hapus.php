<?php
include("config.php");

// Cek apakah ada parameter id yang dikirim
if (isset($_GET['id'])) {
    $id_hapus = $_GET['id'];

    // Ambil data pendaftar untuk memastikan ada
    $sql = "SELECT * FROM pendaftaran WHERE id = '$id_hapus'";
    $query = mysqli_query($db, $sql);
    $buku = mysqli_fetch_array($query);


    // Cek apakah data ditemukan
    if (!$buku) {
        header("Location: list-maba.php");
        exit();
    }

    // Query DELETE berdasarkan ID
    $sql_delete = "DELETE FROM pendaftaran WHERE id = '$id_hapus'";
    $query_delete = mysqli_query($db, $sql_delete);

    // Redirect ke list-maba.php setelah hapus
    header("Location: list-maba.php");
    exit();
} else {
    header("Location: list-maba.php");
    exit();
}
?>