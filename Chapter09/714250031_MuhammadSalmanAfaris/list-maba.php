<?php
include "config.php";

$query = mysqli_query($db, "SELECT * FROM pendaftaran");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftaran</title>
</head>
<body>

<h2>Data Pendaftaran</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Sekolah Asal</th>
        <th>Aksi</th>
    </tr>

<?php $no = 1; ?>
<?php while ($data = mysqli_fetch_assoc($query)) : ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['nama']; ?></td>
        <td><?= $data['alamat']; ?></td>
        <td><?= $data['jenis_kelamin']; ?></td>
        <td><?= $data['agama']; ?></td>
        <td><?= $data['sekolah_asal']; ?></td>
        <td>
            <a href="edit.php?id=<?= $data['id']; ?>">Edit</a> |
            <a href="hapus.php?id=<?= $data['id']; ?>" 
            onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
        </td>
    </tr>
<?php endwhile; ?>

</table>

</body>
</html>
