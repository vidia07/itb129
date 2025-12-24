<?php
include("config.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM Pendaftaran WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-maba.php?status=sukses');
    } else {
        die("Gagal menghapus...");
    }

} else {
    die("Akses dilarang...");
}
?>