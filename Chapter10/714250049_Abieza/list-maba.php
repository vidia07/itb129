<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding-top: 20px;
        }
        header {
            text-align: center;
            margin-bottom: 30px;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }
        h3 {
            margin: 10px 0;
            color: #4a4a4a;
        }
        nav {
            margin-bottom: 20px;
            text-align: center;
        }
        nav a {
            background-color: #667eea;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        nav a:hover {
            background-color: #5a67d8;
        }
        table {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        p {
            background: rgba(255, 255, 255, 0.9);
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
            text-align: center;
            margin: 0;
        }
    </style>
</head>
<body>
<header>
    <h3>Pendaftaran Mahasiswa Baru</h3>
</header>

<nav>
    <a href="form-daftar.php">[+] Tambah Data</a>
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
            <th>Sekolah Asal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql   = "SELECT * FROM pendaftaran";
        $query = mysqli_query($db, $sql);
        $no    = 1;

        while ($maba = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>".$no++."</td>";
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
        }
        ?>
    </tbody>
</table>

<p>Total: <?php echo mysqli_num_rows($query); ?></p>
</body>
</html>
