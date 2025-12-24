<?php include ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
                padding: 0;
                background-color: #f4f4f4;
            }
            header {
                text-align: center;
                margin-bottom: 30px;
            }
            h3 {
                padding: 10px;
                background-color: orange;
            }
            nav a {
                text-decoration: none;
                color: #333;
                font-weight: bold;
            }
            nav a:hover {
                text-decoration: underline;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            table, th, td {
                border: 1px solid #ddd;
            }
            th, td {
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
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

$sql = "SELECT * FROM pendaftaran";
$query = mysqli_query($database, $sql);

    while($maba = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$maba['id']."</td>";
        echo "<td>".$maba['nama']."</td>";
        echo "<td>".$maba['alamat']."</td>";
        echo "<td>".$maba['jenis_kelamin']."</td>";
        echo "<td>".$maba['agama']."</td>";
        echo "<td>".$maba['asal_sekolah']."</td>";

        echo "<td>";
        echo "<a href='form-edit.php?id=".$maba['id']."'>Edit</a> | ";
        echo "<a href='delete.php?id=".$maba['id']."'>Hapus</a>";
        echo "</td>";
        echo "</tr>";
}
?>
</tbody>
</table>
    <p> Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>
