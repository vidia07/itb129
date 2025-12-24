<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | ULBI</title>
    <style>
        /* Pengaturan Umum */
body {
    background-color: #f4f7f6;
    color: #333;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 40px;
}

h3 {
    color: #2c3e50;
    margin-bottom: 20px;
}

/* Tombol Tambah Data */
a[href="form-daftar.php"] {
    text-decoration: none;
    background-color: #27ae60;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: bold;
    margin-bottom: 20px;
    display: inline-block;
    transition: background 0.3s;
}

a[href="form-daftar.php"]:hover {
    background-color: #219150;
}

/* Styling Tabel */
table {
    border-collapse: collapse;
    width: 90%;
    max-width: 1000px;
    background-color: white;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    border-radius: 8px;
    overflow: hidden;
}

table th {
    background-color: #2980b9;
    color: white;
    padding: 15px;
    text-transform: uppercase;
    font-size: 14px;
}

table td {
    padding: 12px 15px;
    border-bottom: 1px solid #ddd;
    text-align: center;
}

table tr:hover {
    background-color: #f1f1f1;
}

/* Styling Link Edit & Hapus */
td a {
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 4px;
    font-size: 13px;
    margin: 0 2px;
}

td a:first-child { background-color: #f39c12; color: white; } /* Edit */
td a:last-child { background-color: #e74c3c; color: white; }  /* Hapus */

/* Styling Form (Untuk Gambar Kedua) */
fieldset {
    border: none;
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    width: 400px;
}

input[type="text"], textarea, select {
    width: 100%;
    padding: 10px;
    margin: 10px 0 20px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; /* Agar padding tidak merusak lebar */
}
    </style>
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
    </header>    

    <nav>
        <a href="form-daftar.php">[+]Tambah Data</a>
    </nav>

    <br>

    <table border="1">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah</th>
            <th>Aksi</th>
        </tr>
    </thead>    

    <tbody>
        <?php
        $sql = "SELECT * FROM pendaftaran";
        $query = mysqli_query($db, $sql);
        $no = 1; // Counter untuk nomor urut

        while($maba = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$maba['nama']."</td>";
            echo "<td>".$maba['alamat']."</td>";
            echo "<td>".$maba['jenis_kelamin']."</td>";
            echo "<td>".$maba['agama']."</td>";
            echo "<td>".$maba['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$maba['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$maba['id']."'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </tbody>
    </table>
  <p>Total: <?php echo mysqli_num_rows($query) ?></p>  
</body>
</html>