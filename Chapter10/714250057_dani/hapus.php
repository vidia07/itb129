<?php
include("config.php");
if (isset($_GET['id'])) {
    $ID = $_GET['id'];
    $sql = "DELETE FROM pendaftaran WHERE id=$ID";
    $query = mysqli_query($db, $sql);
    if( $query ) {
        header('Location: list-maba.php');
    } else {
        die("Gagal menghapus...");
    }
} else {
    die("Akses dilarang...");
}
?>