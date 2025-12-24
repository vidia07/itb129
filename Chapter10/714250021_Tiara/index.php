<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran mahasiswa baru ULBI</title>
    <style>
        /* --- Dasar Halaman --- */
body {
    font-family: 'Segoe UI', Helvetica, Arial, sans-serif;
    background-color: #f0f4f8; /* Abu-abu kebiruan lembut */
    margin: 0;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

h1, h3 {
    color: #2c3e50;
    margin-bottom: 20px;
}

/* --- Container Form (Gambar ke-2, ke-4, ke-5) --- */
.container {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 500px;
    border-top: 6px solid #2980b9; /* Aksen Biru ULBI */
}

/* --- Tabel (Gambar ke-3) --- */
table {
    border-collapse: collapse;
    width: 90%;
    max-width: 1000px;
    background: white;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    border-radius: 8px;
    overflow: hidden;
    margin-top: 10px;
}

table th {
    background-color: #2980b9;
    color: white;
    padding: 15px;
    font-size: 14px;
    text-transform: uppercase;
}

table td {
    padding: 12px;
    border-bottom: 1px solid #eee;
    text-align: center;
}

table tr:hover {
    background-color: #f9fbff;
}

/* --- Input & Tombol --- */
input[type="text"], textarea, select {
    width: 100%;
    padding: 10px;
    margin: 8px 0 18px 0;
    border: 1px solid #ccd1d9;
    border-radius: 6px;
    box-sizing: border-box;
}

input[type="submit"], button {
    background-color: #2980b9;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: bold;
    width: 100%;
    transition: 0.3s;
}

input[type="submit"]:hover {
    background-color: #1f6391;
}

/* --- Link Aksi (Edit & Hapus) --- */
.btn-action {
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 4px;
    font-size: 12px;
    color: white;
}
.btn-edit { background-color: #f39c12; }
.btn-delete { background-color: #e74c3c; }
    </style>
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
        <h1>Universitas Logistik dan Bisnis Internasional</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar</a></li>
            <li><a href="list-maba.php">Pendaftaran</a></li>
        </ul>
    </nav>
</body>
</html>