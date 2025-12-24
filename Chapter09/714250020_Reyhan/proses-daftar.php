<?php
include("config.php");

if(isset($_POST['daftar'])){
    // 1. Ambil data dari formulir (Pastikan 'name' di HTML sama dengan di dalam $_POST)
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal']; // Mengambil dari name="sekolah_asal" di HTML

    // 2. Query SQL
    // Masukkan ke kolom 'asal_sekolah' sesuai gambar phpMyAdmin Anda
    $sql = "INSERT INTO pendaftaran (nama, alamat, jenis_kelamin, agama, sekolah_asal) 
            VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah')";
    
    $query = mysqli_query($db, $sql);

    // 3. Cek Keberhasilan
    if( $query ) {
        // Berhasil -> Langsung ke daftar mahasiswa
        header('Location: list-maba.php?status=sukses');
    } else {
        // Gagal -> Tampilkan pesan error teknis agar bisa kita perbaiki
        die("Error Database: " . mysqli_error($db));
    }
} else {
    die("Akses dilarang...");
}
?>