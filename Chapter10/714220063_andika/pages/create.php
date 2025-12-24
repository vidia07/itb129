<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="container">
    <h1>Tambah Mahasiswa</h1>

    <form action="../actions/store.php" method="POST">
        <input name="nama" placeholder="Nama" required>
        <input name="alamat" placeholder="Alamat" required>

        <select name="jenis_kelamin">
            <option>Laki-laki</option>
            <option>Perempuan</option>
        </select>

        <input name="agama" placeholder="Agama">
        <input name="sekolah_asal" placeholder="Sekolah Asal">

        <button type="submit">Simpan</button>
    </form>
</div>

</body>
</html>