<?php
include("config.php");

if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    $sql = "INSERT INTO pendaftaran (nama, alamat, jenis_kelamin, agama, asal_sekolah) 
            VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah')";
    
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-maba.php?status=sukses');
    } else {
        die("Error Database: " . mysqli_error($db));
    }
} else {
    die("Akses dilarang...");
}
?>