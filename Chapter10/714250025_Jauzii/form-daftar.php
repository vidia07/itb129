<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <header class="header">
        <h1>Form Pendaftaran</h1>
        <p>Mahasiswa Baru</p>
    </header>

    <form class="form" action="proses-daftar.php" method="POST">

        <label>Nama Lengkap</label>
        <input type="text" name="nama" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Jenis Kelamin</label>
        <div class="radio-group">
            <label class="radio-item">
                <input type="radio" name="jenis_kelamin" value="Laki-laki" required>
                Laki-laki
            </label>
            <label class="radio-item">
                <input type="radio" name="jenis_kelamin" value="Perempuan">
                Perempuan
            </label>
        </div>

        <label>Agama</label>
        <select name="agama" required>
            <option value="">-- Pilih Agama --</option>
            <option>Islam</option>
            <option>Kristen</option>
            <option>Katholik</option>
            <option>Hindu</option>
            <option>Budha</option>
        </select>

        <label>Sekolah Asal</label>
        <input type="text" name="sekolah_asal" required>

        <button type="submit" name="daftar">Daftar</button>

    </form>

</div>

</body>
</html>
