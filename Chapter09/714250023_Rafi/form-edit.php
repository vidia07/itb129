<?php include ("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Mahasiswa Baru | ULBI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            text-align: center;
            margin-bottom: 30px;
        }
        h3 {
            padding: 10px;
            background-color: orange;
        }
    </style>
</head>
<body>
    <header>
        <h3>Form Edit Mahasiswa Baru</h3>
    </header>

    <?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $sql = "SELECT * FROM pendaftaran WHERE id = '$id'";
        $query = mysqli_query($database, $sql);
        $maba = mysqli_fetch_array($query);
        
        if ($maba) {
    ?>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $maba['id']; ?>" />
            
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" value="<?php echo $maba['nama']; ?>" />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"><?php echo $maba['alamat']; ?></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" 
                    <?php if($maba['jenis_kelamin'] == 'laki-laki') echo 'checked'; ?>> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" 
                    <?php if($maba['jenis_kelamin'] == 'perempuan') echo 'checked'; ?>> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <select name="agama">
                    <option value="Islam" <?php if($maba['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
                    <option value="Kristen" <?php if($maba['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
                    <option value="Katolik" <?php if($maba['agama'] == 'Katolik') echo 'selected'; ?>>Katolik</option>
                    <option value="Hindu" <?php if($maba['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                    <option value="Budha" <?php if($maba['agama'] == 'Budha') echo 'selected'; ?>>Budha</option>
                </select>
            </p>
            <p>
                <label for="asal_sekolah">Sekolah Asal: </label>
                <input type="text" name="asal_sekolah" value="<?php echo $maba['asal_sekolah']; ?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="edit" />
                <a href="list-maba.php">Batal</a>
            </p>
        </fieldset>
    </form>

    <?php
        } else {
            echo "Data tidak ditemukan!";
        }
    } else {
        echo "ID tidak ada!";
    }
    ?>
</body>
</html>