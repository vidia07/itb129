<?php
$server = "localhost";
$user = "root";
$password = "";
$namadb = "mahasiswabaru";

$db = mysqli_connect($server, $user, $password, $namadb);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>