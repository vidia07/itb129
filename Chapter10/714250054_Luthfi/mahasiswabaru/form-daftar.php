<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | ULBI</title>
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

/* FORM PAKE EFEK KACA POKOKNYA */
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
    <h3>Formulir Pendaftaran Mahasiswa Baru | ULBI</h3>
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
            <label>
                <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki
            </label>
            <label>
                <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
            </label>
        </p>

        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>

        <p>
            <label for="asal_sekolah">Sekolah Asal: </label>
            <input type="text" name="asal_sekolah" placeholder="nama sekolah" />
        </p>

        <p>
            <input type="submit" value="Daftar" name="daftar" />
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
