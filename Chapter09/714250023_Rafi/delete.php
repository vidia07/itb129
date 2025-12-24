<?php

include("config.php");

if (isset($_GET['id'])) {
    
    $id = $_GET['id'];
    
    $sql = "DELETE FROM pendaftaran WHERE id = '$id'";
    $query = mysqli_query($database, $sql);
    
    if( $query ) {
        header('Location: list-maba.php?status=dihapus');
    } else {
        header('Location: list-maba.php?status=gagal');
    }
    
} else {
    die("ID tidak ada! Akses dilarang...");
}

?>