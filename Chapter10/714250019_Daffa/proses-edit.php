<?php
include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    $sql = "UPDATE pendaftaran SET 
            nama='$nama', 
            jenis_kelamin='$jk', 
            agama='$agama', 
            asal_sekolah='$sekolah' 
            WHERE id=$id";
            
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-maba.php?status=sukses');
    } else {
        die("Gagal menyimpan perubahan: " . mysqli_error($db));
    }

} else {
    die("Akses dilarang...");
}
?>