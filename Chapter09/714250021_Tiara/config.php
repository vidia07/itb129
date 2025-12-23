<?php
$server = "localhost";
$use = "root";
$password = "";
$namadb = "mahasiswabaru";

$db = mysqli_connect($server, $use, $password, $namadb);

if(!$db){
    die("Gagal      terhubung dengan database : " . mysqli_connect_error());
}
?>