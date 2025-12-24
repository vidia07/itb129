<?php

include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM pendaftaran WHERE id=$id";
$query = mysqli_query($database, $sql);

if( $query ) {
    header('Location: list-maba.php?status=terhapus');
} else {
    header('Location: list-maba.php?status=gagal');
}

?>
