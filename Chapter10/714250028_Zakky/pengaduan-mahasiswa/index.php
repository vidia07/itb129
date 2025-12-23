<?php
include 'config/db.php';
$data = mysqli_query($conn, "SELECT * FROM pengaduan ORDER BY tanggal DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pengaduan Mahasiswa</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>

<div class="container">
    <a href="tambah_pengaduan.php" id="tambah-pengaduan">+ Tambah Pengaduan</a>
    <a href="auth/login.php" id="login-admin">Login Admin</a>
    <h1>Daftar Pengaduan Mahasiswa</h1>
        <hr>

    <?php while ($p = mysqli_fetch_assoc($data)) : ?>
        <p>
            <strong><?= $p['judul']; ?></strong><br>
            <?= $p['isi']; ?><br>
            Status: <b><?= $p['status']; ?></b><br>
            <small><?= $p['tanggal']; ?></small>
        </p>
        <hr>
    <?php endwhile; ?>
</div>
</body>
</html>
