<?php
include("config.php");

if (!isset($_POST['id']) || empty($_POST['id']) || intval($_POST['id']) <= 0) {
    header('Location: list-maba.php');
    exit;
}

$id = intval($_POST['id']);
$nama = mysqli_real_escape_string($db, $_POST['nama']);
$alamat = mysqli_real_escape_string($db, $_POST['alamat']);
$jenis_kelamin = mysqli_real_escape_string($db, $_POST['jenis_kelamin']);
$agama = mysqli_real_escape_string($db, $_POST['agama']);
$asal_sekolah = mysqli_real_escape_string($db, $_POST['asal_sekolah']);

$sql = "UPDATE pendaftaran1 SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', asal_sekolah='$asal_sekolah' WHERE id=$id";

if (mysqli_query($db, $sql)) {
    header('Location: list-maba.php');
    exit;
} else {
    die("Gagal memperbarui data: " . mysqli_error($db));
}
