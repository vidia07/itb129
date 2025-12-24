<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "mahasiswabaru";

$database = mysqli_connect($server, $user, $password, $nama_database);

if (!$database) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>config.php delete.php form-daftar.php form-edit.php hapus.php index.php list-maba.php proses-daftar.php proses-edit.php