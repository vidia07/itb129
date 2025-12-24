<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>
    <h3>Form Pendaftaran</h3>

    <form action="proses-daftar.php"
    method="POST">
        <p>
            <label>Nama:</label>;
            <input type="text" name="nama" required>
        </p>
        <p>
            <label>Alamat:</label>
            <textarea name="alamat" required>
            </textarea>
        </p>
        <p>
                <label>Jenis Kelamin:</label>
                <input type="radio"
            name="jenis_kelamin" value="Laki-laki">Laki-laki
                <input type="radio"
            name="jenis_kelamin" value="Perempuan">Perempuan
        </p>
        <p>
            <label>Agama:</label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Katolik</option>
                <option>Hindu</option>
                <option>Buddha</option>
            </select>
        </P>
        <p>
            <label>Sekolah Asal</label>
            <input type="submit" value="Daftar">
        </P>
        </form>

</body>
</html>