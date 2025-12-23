<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendftaran Mahasiswa Baru | ULBI</title>
    <style>
   /* Reset & Latar Belakang */
body {
    font-family: 'Segoe UI', Arial, sans-serif;
    background-color: #f0f4f8; /* Abu-abu kebiruan yang lembut */
    margin: 0;
    padding: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Container untuk Form agar melayang */
.form-card {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    width: 100%;
    max-width: 450px;
    border-top: 5px solid #2980b9; /* Aksen biru di atas form */
}

h3 {
    color: #2c3e50;
    text-align: center;
    margin-top: 0;
}

/* Styling Baris Form */
p {
    margin-bottom: 15px;
}

label {
    display: block;
    font-weight: 600;
    color: #444;
    margin-bottom: 5px;
}

/* Input, Textarea, dan Dropdown */
input[type="text"],
textarea,
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #d1d8e0;
    border-radius: 5px;
    background-color: #fff;
    box-sizing: border-box; /* Menjaga ukuran tetap stabil */
}

input[type="text"]:focus,
textarea:focus,
select:focus {
    border-color: #2980b9;
    outline: none;
    box-shadow: 0 0 5px rgba(41, 128, 185, 0.2);
}

/* Styling Khusus Radio Button */
.radio-group {
    display: flex;
    gap: 15px;
    padding: 5px 0;
}

.radio-group input {
    margin-right: 5px;
}

/* Tombol Submit */
input[type="submit"] {
    background-color: #2980b9;
    color: white;
    border: none;
    padding: 12px;
    width: 100%;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s;
    margin-top: 10px;
}

input[type="submit"]:hover {
    background-color: #1c6391;
}
</style>
</head>
<body>
    <header>
        <h3>Formulir Pendaaftran Mahasiswa Baru | ULBI</h3>
    </header>    

    <form action="proses-daftar.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" placeholder="nama lengkap"/>
            </p>
            <p>
                <label for="alamat">Alamat:</label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <label> <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
                <label> <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</label>
            </p>
            <p>
                <label for="agama">Agama:</label>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah"/>
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar"/>
            </p>
        </fieldset>
    </form>
</body>
</html>