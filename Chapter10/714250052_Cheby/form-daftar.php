<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Mahasiswa Baru</h3>
        <h1>POLTEKPOS</h1>
    </header>

    <form action="proses-daftar.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" />
            </p>

            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"></textarea>
            </p>

            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
            </p>

            <p>

                <label for="agama">Agama: </label>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Katolik</option>
                    <option>Hindu</option>
                    <option>Buddha</option>
                </select>
            </p>

            <p>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
            </p>

            <p>
                <input type="submit" value="Daftar" name="daftar" class="btn btn-oren" style="width: auto; padding: 10px 40px; border: none; cursor: pointer; display: block; margin: 0 auto;" />
            </p>
        </fieldset>
    </form>

</body>
</html>