<?php
include("config.php");

// cek apakah form dikirim
if (isset($_POST['daftar'])) {

    // ambil dan amankan data
    $nama    = mysqli_real_escape_string($db, $_POST['nama']);
    $alamat  = mysqli_real_escape_string($db, $_POST['alamat']);
    $jk      = mysqli_real_escape_string($db, $_POST['jenis_kelamin']);
    $agama   = mysqli_real_escape_string($db, $_POST['agama']);
    $sekolah = mysqli_real_escape_string($db, $_POST['sekolah_asal']);

    // query SQL (VALUES bukan VALUE)
    $sql = "INSERT INTO pendaftaran 
            (nama, alamat, jenis_kelamin, agama, sekolah_asal)
            VALUES 
            ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        header("Location: index.php?status=sukses");
    } else {
        header("Location: index.php?status=gagal");
    }

} else {
    die("Akses dilarang...");
}
?> 
