<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa Baru | ULBI</title>
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: url('https://i0.wp.com/ulbi.ac.id/wp-content/uploads/2025/04/ULBI.jpg?w=800&ssl=1') no-repeat center center fixed;
    background-size: cover;
    color: #fff;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

/* HEADER */
header {
    background: rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 15px;
    padding: 20px;
    margin-bottom: 20px;
    text-align: center;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
}

header h3 {
    font-size: 1.8em;
    margin-bottom: 10px;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

/* FORM EFEK KACA NIH */
form {
    background: rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(0, 132, 255, 0.3);
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    width: 100%;
}

fieldset {
    border: none;
    padding: 0;
}

p {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: 600;
    color: #ffffffff;
}

input[type="text"],
input[type="email"],
textarea,
select {
    width: 100%;
    padding: 12px;
    border: 1px solid rgba(0, 132, 255, 0.3);
    border-radius: 8px;
    background: rgba(255, 255, 255, 0.1);
    color: #fff;
    font-size: 16px;
    font-weight:500px;
    transition: all 0.3s ease;
}

option {
    background-color: #e6f7ff;
    color: #000;
}

input[type="text"]:focus,
input[type="email"]:focus,
textarea:focus,
select:focus {
    outline: none;
    border-color: rgba(0, 132, 255, 0.3);
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
}

input[type="text"]::placeholder,
input[type="email"]::placeholder,
textarea::placeholder {
    color: #d8d8d8ff;
}

textarea {
    resize: vertical;
    min-height: 80px;
}

input[type="radio"] {
    margin-right: 5px;
}

input[type="submit"] {
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
    border: 1px solid rgba(0, 132, 255, 0.3);
    padding: 12px 30px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    transition: all 0.3s ease;
    width: 100%;
}

input[type="submit"]:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

/* Responsivitas untuk perangkat kecil */
@media (max-width: 768px) {
    form {
        padding: 20px;
    }

    header h3 {
        font-size: 1.5em;
    }
}
    </style>
</head>
<body>

<header>
    <h3>Formulir Edit Mahasiswa Baru | ULBI</h3>
</header>

<?php
// ambil ID
$id = $_GET['id'];

// Query untuk mengambil data mahasiswa berdasarkan ID
$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($db, $sql);
$maba = mysqli_fetch_assoc($query);

// Jika data tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>

<form action="proses-edit.php" method="POST">
    <fieldset>

        <input type="hidden" name="id" value="<?php echo $maba['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $maba['nama'] ?>" />
        </p>

        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $maba['alamat'] ?></textarea>
        </p>

        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label>
                <input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($maba['jenis_kelamin'] == 'laki-laki') ? "checked" : "" ?>> Laki-laki
            </label>
            <label>
                <input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($maba['jenis_kelamin'] == 'perempuan') ? "checked" : "" ?>> Perempuan
            </label>
        </p>

        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option <?php echo ($maba['agama'] == 'Islam') ? "selected" : "" ?>>Islam</option>
                <option <?php echo ($maba['agama'] == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                <option <?php echo ($maba['agama'] == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                <option <?php echo ($maba['agama'] == 'Budha') ? "selected" : "" ?>>Budha</option>
                <option <?php echo ($maba['agama'] == 'Atheis') ? "selected" : "" ?>>Atheis</option>
            </select>
        </p>

        <p>
            <label for="asal_sekolah">Sekolah Asal: </label>
            <input type="text" name="asal_sekolah" placeholder="nama sekolah" value="<?php echo $maba['asal_sekolah'] ?>" />
        </p>

        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

    </fieldset>
</form>

<script>
document.querySelector('form').addEventListener('submit', function(e) {
    const nama = document.querySelector('input[name="nama"]').value.trim();
    const alamat = document.querySelector('textarea[name="alamat"]').value.trim();
    const jenisKelamin = document.querySelector('input[name="jenis_kelamin"]:checked');
    const agama = document.querySelector('select[name="agama"]').value;
    const asalSekolah = document.querySelector('input[name="asal_sekolah"]').value.trim();

    if (!nama) {
        alert('Nama harus diisi!');
        e.preventDefault();
        return;
    }

    if (!alamat) {
        alert('Alamat harus diisi!');
        e.preventDefault();
        return;
    }

    if (!jenisKelamin) {
        alert('Jenis Kelamin harus dipilih!');
        e.preventDefault();
        return;
    }

    if (!agama) {
        alert('Agama harus dipilih!');
        e.preventDefault();
        return;
    }

    if (!asalSekolah) {
        alert('Sekolah Asal harus diisi!');
        e.preventDefault();
        return;
    }
});
</script>

</body>
</html>
