<?php 
include("config.php");

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$sql = "SELECT * FROM pendaftaran WHERE id = " . $id;
$query = mysqli_query($database, $sql);
$data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pendaftaran | POLTEKPOS</title>
    <link rel="stylesheet" href="css/form-edit.css">
</head>
<body>

<header>
    <h3>Edit Data Pendaftaran Mahasiswa Baru | POLTEKPOS</h3>
</header>

<form action="proses-edit.php" method="POST">
    <fieldset>
        
        <p>
            <label for="id">ID: </label>
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
            <input type="text" value="<?php echo $data['id']; ?>" disabled />
        </p>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $data['nama']; ?>" />
        </p>

        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $data['alamat']; ?></textarea>
        </p>

        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label>
                <input type="radio" name="jenis_kelamin" value="laki-laki" <?php if($data['jenis_kelamin'] == 'laki-laki') echo 'checked'; ?>> Laki-laki
            </label>
            <label>
                <input type="radio" name="jenis_kelamin" value="perempuan" <?php if($data['jenis_kelamin'] == 'perempuan') echo 'checked'; ?>> Perempuan
            </label>
        </p>

        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option value="Islam" <?php if($data['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
                <option value="Kristen" <?php if($data['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
                <option value="Hindu" <?php if($data['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                <option value="Budha" <?php if($data['agama'] == 'Budha') echo 'selected'; ?>>Budha</option>
                <option value="Atheis" <?php if($data['agama'] == 'Atheis') echo 'selected'; ?>>Atheis</option>
            </select>
        </p>

        <p>
            <label for="asal_sekolah">Sekolah Asal: </label>
            <input type="text" name="asal_sekolah" placeholder="nama sekolah" value="<?php echo $data['asal_sekolah']; ?>" />
        </p>

        <p>
            <input type="submit" value="Simpan" name="simpan" />
            <input type="button" value="Kembali" onclick="history.back()" />
        </p>

    </fieldset>
</form>

</body>
</html>
