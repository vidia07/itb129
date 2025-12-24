<?php
include("config.php");

// jika tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-maba.php');
    exit;
}

// ambil id dari query string
$id = $_GET['id'];

// query ambil data
$sql   = "SELECT * FROM pendaftaran WHERE id = $id";
$query = mysqli_query($db, $sql) or die(mysqli_error($db));
$siswa = mysqli_fetch_assoc($query);

// jika data tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Edit Mahasiswa</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>

    <h3>Formulir Edit Mahasiswa</h3>

    <form action="proses-edit.php" method="POST">
        <fieldset>

            <input type="hidden" name="id" value="<?= $siswa['id']; ?>">

            <p>
                <label>Nama</label>
                <input type="text" name="nama" value="<?= $siswa['nama']; ?>" required>
            </p>

            <p>
                <label>Jenis Kelamin</label>
                <label>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki"
                        <?= ($siswa['jenis_kelamin'] === 'Laki-laki') ? 'checked' : ''; ?>>
                    Laki-laki
                </label>
                <label>
                    <input type="radio" name="jenis_kelamin" value="Perempuan"
                        <?= ($siswa['jenis_kelamin'] === 'Perempuan') ? 'checked' : ''; ?>>
                    Perempuan
                </label>
            </p>

            <p>
                <label>Agama</label>
                <select name="agama" required>
                    <option value="Islam" <?= ($siswa['agama'] === 'Islam') ? 'selected' : ''; ?>>Islam</option>
                    <option value="Katholik" <?= ($siswa['agama'] === 'Katholik') ? 'selected' : ''; ?>>Katholik</option>
                    <option value="Kristen" <?= ($siswa['agama'] === 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
                    <option value="Hindu" <?= ($siswa['agama'] === 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                    <option value="Budha" <?= ($siswa['agama'] === 'Budha') ? 'selected' : ''; ?>>Budha</option>
                </select>
            </p>

            <p>
                 <label>Sekolah Asal</label>
                <input type="text" name="sekolah_asal" value="<?= $siswa['asal_sekolah']; ?>" required>
            </p>

            <p>
                <input type="submit" name="simpan" value="Simpan">
            </p>

        </fieldset>
    </form>

</body>
</html>
