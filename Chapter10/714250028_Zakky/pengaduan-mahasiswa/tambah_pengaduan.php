<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'config/db.php';

if (isset($_POST['kirim'])) {
    $nama  = $_POST['nama'];
    $judul = $_POST['judul'];
    $isi   = $_POST['isi'];

    mysqli_query($conn, "
        INSERT INTO pengaduan (nama, judul, isi)
        VALUES ('$nama', '$judul', '$isi')
    ");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pengaduan</title>
    <link rel="stylesheet" href="assets/css/tambah_pengaduan.css">
</head>
<body>
<div class="container">
<h2>Form Pengaduan</h2>
    <form method="POST">
        <input type="text" name="nama" placeholder="Nama" required><br><br>
        <input type="text" name="judul" placeholder="Judul" required><br><br>
        <textarea name="isi" placeholder="Isi pengaduan" required id="isi"></textarea><br><br>
        <button id="kembali"><a href="index.php">Kembali</a></button>
        <button name="kirim" id="kirim">Kirim</button>
    </form>
</div>
</body>
</html>
