<?php include ("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
    <link rel="stylesheet" href="css/list-maba.css">
</head>
<body>
    <div class="container">
        <header>
            <h3>Pendaftaran Mahasiswa Baru</h3>
        </header>

        <nav>
            <a href="form-daftar.php">[+] Tambah Data</a>
        </nav>

        <table>
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
                $sql = "SELECT * FROM pendaftaran1";
                $query = mysqli_query($db, $sql);

                while($maba = mysqli_fetch_array($query)){
                    $id = intval($maba['id']);
                    echo "<tr>";
                    echo "<td>".$id."</td>";
                    echo "<td>".htmlspecialchars($maba['nama'])."</td>";
                    echo "<td>".htmlspecialchars($maba['alamat'])."</td>";
                    echo "<td>".htmlspecialchars($maba['jenis_kelamin'])."</td>";
                    echo "<td>".htmlspecialchars($maba['agama'])."</td>";
                    echo "<td>".htmlspecialchars($maba['asal_sekolah'])."</td>";

                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$id."'>Edit</a>";
                    echo "<a href='hapus.php?id=".$id."' onclick=\"return confirm('Yakin ingin menghapus?')\">Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        
        <p class="total-data">Total Pendaftar: <?php echo mysqli_num_rows($query) ?></p>
    </div>
</body>
</html>