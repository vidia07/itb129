<?php
include "config.php";

$id = $_GET['id'];
$query = mysqli_query($db, "SELECT * FROM pendaftaran WHERE id='$id'");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>

<h2>Edit Data Pendaftaran</h2>

<form action="proses-edit.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    Nama:<br>
    <input type="text" name="nama" value="<?= $data['nama']; ?>"><br><br>

    Alamat:<br>
    <textarea name="alamat"><?= $data['alamat']; ?></textarea><br><br>

    Jenis Kelamin:<br>
    <input type="text" name="jenis_kelamin" value="<?= $data['jenis_kelamin']; ?>"><br><br>

    Agama:<br>
    <input type="text" name="agama" value="<?= $data['agama']; ?>"><br><br>

    Sekolah Asal:<br>
    <input type="text" name="sekolah_asal" value="<?= $data['sekolah_asal']; ?>"><br><br>

    <button type="submit" name="update">Update</button>
</form>

</body>
</html>
