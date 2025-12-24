<?php include ("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pendaftar | POLTEKPOS</title>
    <link rel="stylesheet" href="css//tabel.css">
</head>
<body>

    <div class="table-container">
        <header>
            <h3>Pendaftaran Mahasiswa Baru</h3>
            <h1>Data Calon Mahasiswa</h1>
        </header>

        <nav style="margin-top: 20px;">
            <a href="form-daftar.php" class="btn-tambah">[+] Tambah Pendaftar</a>
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
                $sql = "SELECT * FROM pendaftaran";
                $query = mysqli_query($db, $sql);
                $no = 1;

                while($maba = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$no++."</td>";
                    echo "<td>".$maba['nama']."</td>";
                    echo "<td>".$maba['alamat']."</td>";
                    echo "<td>".$maba['jenis_kelamin']."</td>";
                    echo "<td>".$maba['agama']."</td>";
                    echo "<td>".$maba['sekolah_asal']."</td>";

                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$maba['id']."' class='btn-edit'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$maba['id']."' class='btn-hapus' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <p class="total-data">Total Pendaftar: <?php echo mysqli_num_rows($query) ?></p>
        
        <center><a href="index.php" class="back-link"> Kembali ke Menu Utama</a></center>
    </div>

</body>
</html>