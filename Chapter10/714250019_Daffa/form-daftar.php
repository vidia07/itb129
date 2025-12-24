<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
    <link rel="stylesheet" href="css/daftar.css"> 
</head>
<body>

    <div class="main-card">
        <header>
            <h3>Formulir Pendaftaran</h3>
            <h1>POLTEKPOS</h1>
        </header>

        <form action="proses-daftar.php" method="POST">
            <fieldset>
                <div class="input-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Masukkan nama lengkap" required />
                </div>

                <div class="input-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" placeholder="Masukkan alamat lengkap"></textarea>
                </div>

                <div class="input-group">
                    <label>Jenis Kelamin</label>
                    <div class="radio-group">
                        <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
                    </div>
                </div>

                <div class="input-group">
                    <label for="agama">Agama</label>
                    <select name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Katolik</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="sekolah_asal">Sekolah Asal</label>
                    <input type="text" name="sekolah_asal" placeholder="Nama sekolah asal" />
                </div>

                <input type="submit" value="Daftar Sekarang" name="daftar" class="btn-login" />
            </fieldset>
        </form>
        
        <a href="index.php" class="back-link">← Kembali ke Menu</a>
    </div>

</body>
</html>