<?php include ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
</head>
<body>
    <div class="container">
        <header>
            <h3>Pendaftaran Mahaswa Baru</h3>
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
                    <th>Asal Sekolah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM pendaftaran";
                $query = mysqli_query($db, $sql);
                $no = 1;
                while($maba = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$no."</td>";
                    echo "<td>".$maba['nama']."</td>";
                    echo "<td>".$maba['alamat']."</td>";
                    echo "<td>".$maba['jenis_kelamin']."</td>";
                    echo "<td>".$maba['agama']."</td>";
                    echo "<td>".$maba['asal_sekolah']."</td>";

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
        <p> Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>

</body>
</html>