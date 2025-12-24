<?php
include("config.php");

// Cek apakah tombol simpan sudah diklik
if(isset($_POST['simpan'])){

    // Ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal']; // Mengambil dari name="sekolah_asal" di form

    // Query update - pastikan nama kolom database adalah asal_sekolah
    $sql = "UPDATE pendaftaran SET 
            nama='$nama', 
            jenis_kelamin='$jk', 
            agama='$agama', 
            sekolah_asal='$sekolah' 
            WHERE id=$id";
            
    $query = mysqli_query($db, $sql);

    // Apakah query update berhasil?
    if( $query ) {
        // Alihkan ke halaman list-maba.php jika berhasil
        header('Location: list-maba.php?status=sukses');
    } else {
        // Tampilkan pesan error jika gagal
        die("Gagal menyimpan perubahan: " . mysqli_error($db));
    }

} else {
    die("Akses dilarang...");
}
?>