<?php

include("config.php");
if (isset($_POST['edit'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['asal_sekolah'];

    $sql = "UPDATE pendaftaran SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', asal_sekolah='$sekolah' WHERE id='$id'";
    $query = mysqli_query($database, $sql);

    if( $query ) {
        header('Location: list-maba.php?status=sukses');
    } else {
        header('Location: list-maba.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>