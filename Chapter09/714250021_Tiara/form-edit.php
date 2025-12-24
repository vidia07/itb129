<?php
include("config.php");

// Cek apakah ada parameter id di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data mahasiswa berdasarkan id
    $sql = "SELECT * FROM pendaftaran WHERE id = '$id'";
    $query = mysqli_query($db, $sql);
    $maba = mysqli_fetch_array($query);

    // Jika data tidak ditemukan, redirect ke list
    if (!$maba) {
        header("Location: list-maba.php");
        exit();
    }
} else {
    // Jika tidak ada id, redirect ke list
    header("Location: list-maba.php");
    exit();
}

// Cek apakah form dikirim dengan metode POST dan tombol edit ditekan
if (isset($_POST['Edit'])) {

    // Ambil data dari form
    $id = $_POST['id']; // readonly, tidak bisa diubah
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // Query UPDATE data berdasarkan id
    $sql = "UPDATE pendaftaran SET
            nama = '$nama',
            alamat = '$alamat',
            jenis_kelamin = '$jk',
            agama = '$agama',
            asal_sekolah = '$sekolah'
            WHERE id = '$id'";

    $query = mysqli_query($db, $sql);

    // Redirect setelah proses
    if ($query) {
        header("Location: list-maba.php");
    } else {
        header("Location: form-edit.php?id=$id");
    }
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
</head>
<body>

<header>
    <h3>Formulir Edit Pendaftaran Mahasiswa Baru | POLTEKPOS</h3>
</header>

<form action="form-edit.php" method="POST">
    <fieldset>

        <input type="hidden" name="id" value="<?php echo $maba['id']; ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $maba['nama']; ?>" required />
        </p>

        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" required><?php echo $maba['alamat']; ?></textarea>
        </p>

        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label>
                <input type="radio" name="jenis_kelamin" value="laki-laki" <?php if ($maba['jenis_kelamin'] == 'laki-laki') echo 'checked'; ?>> Laki-laki
            </label>
            <label>
                <input type="radio" name="jenis_kelamin" value="perempuan" <?php if ($maba['jenis_kelamin'] == 'perempuan') echo 'checked'; ?>> Perempuan
            </label>
        </p>

        <p>
            <label for="agama">Agama: </label>
            <select name="agama" required>
                <option value="Islam" <?php if ($maba['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
                <option value="Kristen" <?php if ($maba['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
                <option value="Hindu" <?php if ($maba['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                <option value="Budha" <?php if ($maba['agama'] == 'Budha') echo 'selected'; ?>>Budha</option>
                <option value="Atheis" <?php if ($maba['agama'] == 'Atheis') echo 'selected'; ?>>Atheis</option>
            </select>
        </p>

        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $maba['sekolah_asal']; ?>" required />
        </p>

        <p>
            <input type="submit" value="Edit" name="Edit" />
        </p>

    </fieldset>
</form>

</body>
</html>