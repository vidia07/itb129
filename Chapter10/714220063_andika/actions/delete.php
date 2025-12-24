<?php
include "../config/database.php";
mysqli_query($conn, "DELETE FROM pendaftaran WHERE id=$_GET[id]");
header("Location: ../pages/index.php");