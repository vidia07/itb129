<?php
include("config.php");

// cek apakah tombol simpan ditekan
if (isset($_POST['simpan'])) {

    // ambil data dari form
    $id            = $_POST['id'];
    $nama          = $_POST['nama'];
    $email         = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama         = $_POST['agama'];
    $sekolah_asal  = $_POST['sekolah_asal'];

    // query update data
    $sql = "UPDATE pendaftaran SET
                nama = '$nama',
                email = '$email',
                jenis_kelamin = '$jenis_kelamin',
                agama = '$agama',
                sekolah_asal = '$sekolah_asal'
            WHERE id = $id";

    $query = mysqli_query($db, $sql);

    // jika berhasil
    if ($query) {
        header('Location: list-maba.php');
        exit;
    } else {
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}
?>
