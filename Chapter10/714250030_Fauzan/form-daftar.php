<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
    <link rel="stylesheet" href="css/daftar.css">
</head>
<body>

    <div class="form-container">
        <header>
            <h3>Formulir Pendaftaran</h3>
        </header>

        <form action="proses-daftar.php" method="POST">
            <fieldset>
                <p>
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="jangan nama panggilan" required />
                </p>
                <p>
                    <label for="alamat">Alamat Tinggal</label>
                    <textarea name="alamat" placeholder="Masukkan alamat lengkap..."></textarea>
                </p>
                <p>
                    <label>Jenis Kelamin</label>
                    <div class="radio-group">
                        <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
                    </div>
                </p>
                <p>
                    <label for="agama">Agama</label>
                    <select name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Lainnya</option>
                    </select>
                </p>
                <p>
                    <label for="sekolah_asal">Sekolah Asal</label>
                    <input type="text" name="sekolah_asal" placeholder="SMA/SMK asal" />
                </p>
                <p>
                    <input type="submit" value="Daftar Sekarang" name="daftar" />
                </p>
            </fieldset>
        </form>
    </div>

</body>
</html>