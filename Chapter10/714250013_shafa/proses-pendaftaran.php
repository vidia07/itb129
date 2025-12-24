<?php

include("config.php");

// cek apakah form dikirim
if (isset($_POST['daftar'])) {

    // ambil data dari formulir (aman)
    $nama    = $_POST['nama'] ?? '';
    $alamat  = $_POST['alamat'] ?? '';
    $jk      = $_POST['jenis_kelamin'] ?? '';
    $agama   = $_POST['agama'] ?? '';
    $sekolah = $_POST['sekolah_asal'] ?? '';

    // validasi sederhana
    if ($nama == '' || $alamat == '' || $jk == '' || $agama == '' || $sekolah == '') {
        die("Data belum lengkap!");
    }

    // buat query (PERBAIKAN: VALUE → VALUES)
    $sql = "INSERT INTO pendaftaran 
            (nama, alamat, jenis_kelamin, agama, sekolah_asal) 
            VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";

    $query = mysqli_query($db, $sql);

    // cek hasil query
    if ($query) {
        header('Location: index.php?status=sukses');
        exit;
    } else {
        header('Location: index.php?status=gagal');
        exit;
    }

} else {
    die("Akses dilarang...");
}

?>
