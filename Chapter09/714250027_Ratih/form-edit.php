<?php
include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-maba.php');
}

// ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM Pendaftaran WHERE id=$id";
$query = mysqli_query($db, $sql) or die(mysqli_error($db));
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Mahasiswa</title>
</head>
<body>
    <h3>Formulir Edit Mahasiswa</h3>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" value="<?php echo $siswa['nama'] ?>" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" 
                <?php if($siswa['jenis_kelamin'] == 'Laki-laki') echo 'checked' ?>> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan"
                <?php if($siswa['jenis_kelamin'] == 'Perempuan') echo 'checked' ?>> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama:</label>
                <select name="agama">
                    <option value="Islam" <?php if($siswa['agama'] == 'Islam') echo 'selected' ?>>Islam</option>
                    <option value="Kristen" <?php if($siswa['agama'] == 'Kristen') echo 'selected' ?>>Kristen</option>
                    <option value="Hindu" <?php if($siswa['agama'] == 'Hindu') echo 'selected' ?>>Hindu</option>
                    <option value="Budha" <?php if($siswa['agama'] == 'Budha') echo 'selected' ?>>Budha</option>
                    <option value="Atheis" <?php if($siswa['agama'] == 'Atheis') echo 'selected' ?>>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" value="<?php echo $siswa['sekolah_asal'] ?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>
</html>