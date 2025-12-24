<?php include("config.php"); 
if( !isset($_GET['id'])){
    header('Location: list-maba.php');
}

  $ID = $_GET['id'];
  $sql = "SELECT * FROM pendaftaran WHERE id=$ID";
    $query = mysqli_query($db, $sql);
    $maba = mysqli_fetch_assoc($query);

    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
    }
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
        <h3>Formulir untuk Ngedit Mahasiswa</h3>
        <form action="proses-edit.php" method="POST" id="formEdit"><input type="hidden" name="id" value="<?php echo $maba['id']; ?>"/>
        <label>Nama</label>
        <input type="text"name="nama" value="<?php echo $maba['nama']; ?>"required />

        <label>Alamat</label>
        <textarea name="alamat" required><?php echo $maba['alamat']; ?></textarea>

        <label>Jenis Kelamin</label>
        <input type="radio"name="jenis_kelamin" value="laki-laki" <?php echo ($maba['jenis_kelamin'] == 'laki-laki') ? "checked":"" ?>> Laki-laki
        <input type="radio"name="jenis_kelamin" value="perempuan" <?php echo ($maba['jenis_kelamin'] == 'perempuan') ? "checked":"" ?>> Perempuan

        <label>Agama</label>
        <select name="agama">
            <option <?php echo ($maba['agama'] == 'Islam') ? "selected":"" ?>>Islam</option>
            <option <?php echo ($maba['agama'] == 'Kristen') ? "selected":"" ?>>Kristen</option>
            <option <?php echo ($maba['agama'] == 'Hindu') ? "selected":"" ?>>Hindu</option>
            <option <?php echo ($maba['agama'] == 'Budha') ? "selected":"" ?>>Budha</option>
            <option <?php echo ($maba['agama'] == 'Atheis') ? "selected":"" ?>>Atheis</option>
        </select>

        <label>Sekolah Asal</label>
        <input type="text"name="sekolah_asal" value="<?php echo $maba['sekolah_asal']; ?>" required />

        <button type="submit"name="simpan" class="btn-submit">Simpan</button>
    
    </form>
    </div>

    <script>
        document.getElementById('formEdit').onsubmit = function()
        {
            return confirm('Yakin ingin menyimpan perubahan data?');
        };
    </script>
  </body>
  </html>