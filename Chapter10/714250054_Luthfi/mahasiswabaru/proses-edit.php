<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau belum?
if (isset($_POST['simpan'])) {

    // ambil data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['asal_sekolah'];

    // buat query update
    $sql = "UPDATE pendaftaran SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', asal_sekolah='$sekolah' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses-edit');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>
