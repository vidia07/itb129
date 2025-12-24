<?php
include("config.php");


if (!isset($_GET['id']) || empty($_GET['id']) || intval($_GET['id']) <= 0) {
    header('Location: list-maba.php');
    exit;
}


$id = intval($_GET['id']);


$sql   = "SELECT * FROM pendaftaran1 WHERE id = $id";
$query = mysqli_query($db, $sql) or die(mysqli_error($db));
$maba = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Edit Mahasiswa</title>
    <link rel="stylesheet" href="css/form-edit.css">
</head>
<body>

    <h3>Formulir Edit Mahasiswa</h3>

    <form action="proses-edit.php" method="POST">
        <fieldset>

            <input type="hidden" name="id" value="<?= $maba['id']; ?>">

            <p>
                <label>Nama</label><br>
                <input type="text" name="nama" value="<?= htmlspecialchars($maba['nama']); ?>" required>
            </p>

            <p>
                <label>Alamat</label><br>
                <textarea name="alamat" rows="4" cols="40" required><?= htmlspecialchars($maba['alamat']); ?></textarea>
            </p>

            <p>
                <label>Jenis Kelamin</label><br>
                <label>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" <?= ($maba['jenis_kelamin'] === 'Laki-laki') ? 'checked' : ''; ?>> Laki-laki
                </label>
                <label>
                    <input type="radio" name="jenis_kelamin" value="Perempuan" <?= ($maba['jenis_kelamin'] === 'Perempuan') ? 'checked' : ''; ?>> Perempuan
                </label>
            </p>

            <p>
                <label>Agama</label><br>
                <select name="agama" required>
                    <option value="Islam" <?= ($maba['agama'] === 'Islam') ? 'selected' : ''; ?>>Islam</option>
                    <option value="Katholik" <?= ($maba['agama'] === 'Katholik') ? 'selected' : ''; ?>>Katholik</option>
                    <option value="Kristen" <?= ($maba['agama'] === 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
                    <option value="Hindu" <?= ($maba['agama'] === 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                    <option value="Budha" <?= ($maba['agama'] === 'Budha') ? 'selected' : ''; ?>>Budha</option>
                </select>
            </p>

            <p>
                <label>Sekolah Asal</label><br>
                <input type="text" name="asal_sekolah" value="<?= htmlspecialchars($maba['asal_sekolah']); ?>" required>
            </p>

            <p>
                <input type="submit" name="simpan" value="Simpan">
            </p>

        </fieldset>
    </form>

</body>
</html>
