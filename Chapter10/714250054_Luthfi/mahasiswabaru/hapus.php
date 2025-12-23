<?php

include("config.php");

// cek apakah ada parameter id di URL
if (isset($_GET['id'])) {

    // ambil id dari parameter
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM pendaftaran WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // cek berhasil atau engga
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses-hapus');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal-hapus');
    }

} else {
    die("Akses dilarang...");
}

?>
