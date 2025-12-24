<?php
include("config.php");

// Kalau tidak ada ID di URL, balikkan ke daftar
if( !isset($_GET['id']) ){
    header('Location: list-maba.php');
}

$id_mhs = $_GET['id'];

// Ambil data mahasiswa berdasarkan ID
$sql = "SELECT * FROM pendaftaran WHERE id=$id_mhs";
$query = mysqli_query($db, $sql);
$maba = mysqli_fetch_assoc($query);

// Kalau data tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data | POLTEKPOS</title>
</head>
<body>
    <h3>Form Edit Mahasiswa</h3>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $maba['id'] ?>" />

        <p>
            <label>Nama: </label>
            <input type="text" name="nama" value="<?php echo $maba['nama'] ?>" />
        </p>
        <p>
            <label>Alamat: </label>
            <textarea name="alamat"><?php echo $maba['alamat'] ?></textarea>
        </p>
        <p>
            <label>Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($maba['jenis_kelamin'] == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($maba['jenis_kelamin'] == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label>Agama: </label>
            <select name="agama">
                <option <?php echo ($maba['agama'] == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($maba['agama'] == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($maba['agama'] == 'Katolik') ? "selected": "" ?>>Katolik</option>
                <option <?php echo ($maba['agama'] == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($maba['agama'] == 'Budha') ? "selected": "" ?>>Budha</option>
            </select>
        </p>
        <p>
            <label>Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" value="<?php echo $maba['sekolah_asal'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
        </fieldset>
    </form>
</body>
</html>