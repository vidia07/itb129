<?php
include "../config/database.php";
$data = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM pendaftaran WHERE id=$_GET[id]")
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="container">
    <h1>Edit Mahasiswa</h1>

    <form action="../actions/update.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">

        <input name="nama" value="<?= $data['nama'] ?>">
        <input name="alamat" value="<?= $data['alamat'] ?>">
        <input name="agama" value="<?= $data['agama'] ?>">
        <input name="sekolah_asal" value="<?= $data['sekolah_asal'] ?>">

        <button>Update</button>
    </form>
</div>

</body>
</html>