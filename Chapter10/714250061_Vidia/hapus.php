<?php
include("koneksi.php");

if (isset($_GET['id'])) {

    // Ambil ID dari query string (URL)
    $id = $_GET['id'];

    // Buat query hapus
    $sql = "DELETE FROM siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // Apakah query hapus berhasil?
    if ($query) {
        // Jika berhasil, alihkan ke halaman list-siswa.php dengan status sukses
        header('Location: list-siswa.php?status=sukses');
    } else {
        // Jika gagal, tampilkan pesan error
        die("Gagal menghapus...");
    }

} else {
    // Jika mencoba akses langsung tanpa ID, dilarang masuk
    die("Akses dilarang...");
}
?>