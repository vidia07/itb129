<?php
include "../config/database.php";

$sql = "INSERT INTO pendaftaran 
(nama, alamat, jenis_kelamin, agama, sekolah_asal)
VALUES (
    '$_POST[nama]',
    '$_POST[alamat]',
    '$_POST[jenis_kelamin]',
    '$_POST[agama]',
    '$_POST[sekolah_asal]'
)";

mysqli_query($conn, $sql);
header("Location: ../pages/index.php");