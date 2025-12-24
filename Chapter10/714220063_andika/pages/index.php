<?php
include "../config/database.php";
$result = mysqli_query($conn, "SELECT * FROM pendaftaran");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mahasiswa Baru</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="container">
    <h1>Mahasiswa Baru</h1>
    <input type="text" id="searchInput" placeholder="Cari nama / sekolah...">

    <a href="create.php" class="btn">+ Tambah</a>

    <table>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>JK</th>
            <th>Agama</th>
            <th>Sekolah</th>
            <th>Aksi</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td><?= $row['jenis_kelamin'] ?></td>
            <td><?= $row['agama'] ?></td>
            <td><?= $row['sekolah_asal'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
               <a href="../actions/delete.php?id=<?= $row['id'] ?>" class="btn-delete">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

<script src="../assets/js/app.js"></script>

</body>
</html>