<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database_name = 'mahasiswabaru';

$database = mysqli_connect($server, $username, $password, $database_name);

if (!$database) {
    die("gagal terhubung dengan database: " . mysqli_connect_error());
}
?>