<?php
include("config.php");

if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    $sql = "INSERT INTO pendaftaran
    (nama, alamat, jenis_kelamin, agama, sekolah_asal)
    VALUES
    ('$nama', '$alamat', '$jk', '$agama', '$sekolah_asal'";

        $query = mysqli_query($db, $sql);

        if ($query) {
            header("Location: index.php? status=sukses");
        } else {
            header("Location: index.php? status=gagal");
        }

}
?>