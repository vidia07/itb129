<?php
include("config.php");

if( !isset($_GET['id']) ){
    header('Location: list-maba.php');
}
$id = $_GET['id'];
$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($db, $sql);
$maba = mysqli_fetch_assoc($query);
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Mahasisw    | POLTEKPOS</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h3>Formulir Edit Mahasiswa</h3>
        <h1>POLTEKPOS</h1>
    </header>


    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $maba['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" value="<?php echo $maba['nama'] ?>" />
        </p>

        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $maba['alamat'] ?></textarea>
        </p>

        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $maba['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>

            <label for="agama">Agama: </label>
            <?php $agama = $maba['agama']; ?>
            <select name="agama">
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Katolik</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
            </select>

        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" value="<?php echo $maba['sekolah_asal'] ?>" />
        </p>

        <p>
            <input type="submit" value="Simpan" name="simpan" class="btn btn-oren" style="width: 100%; border: none; cursor: pointer;" />
        </p>
        </fieldset>
    </form>

</body>
</html>