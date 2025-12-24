<?php
include "../config/database.php";

$sql = "UPDATE pendaftaran SET
    nama='$_POST[nama]',
    alamat='$_POST[alamat]',
    agama='$_POST[agama]',
    sekolah_asal='$_POST[sekolah_asal]'
WHERE id=$_POST[id]";

mysqli_query($conn, $sql);
header("Location: ../pages/index.php");