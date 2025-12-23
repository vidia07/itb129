<?php
include("config.php");

//cek apakh tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    //ambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    //buat query
    $sql = "INSERT INTO pendaftaran (nama, email, jenis_kelamin, agama, sekolah_asal) 
    VALUE ('$nama', '$email', '$jenis_kelamin', '$agama', '$sekolah_asal')";
    $query = mysqli_query($db, $sql);

    //apakah query simpan berhasil?
    if( $query ) {
        //kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        //kalau gagal alihkan ke halaman index.php dengan status=gagal
        die("Location: index.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}
?>