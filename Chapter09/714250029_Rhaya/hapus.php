<?php

include("config.php");

// ambil ID dari URL
$id = $_GET['id'];

// buat query delete
$sql = "DELETE FROM pendaftaran WHERE id=$id";
$query = mysqli_query($database, $sql);

// apakah query delete berhasil?
if( $query ) {
    // kalau berhasil alihkan ke halaman list-maba.php dengan status=sukses
    header('Location: list-maba.php?status=terhapus');
} else {
    // kalau gagal alihkan ke halaman list-maba.php dengan status=gagal
    header('Location: list-maba.php?status=gagal');
}

?>
