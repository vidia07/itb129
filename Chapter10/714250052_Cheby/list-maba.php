

<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Mahasiswa | ULBI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h3>Mahasiswa yang sudah mendaftar</h3></header>
    <nav><a href="form-daftar.php" class="btn btn-oren">[+] Tambah Baru</a></nav>
    <table>
        <thead>

            <tr>
                <th>No</th><th>Nama</th><th>Alamat</th><th>JK</th><th>Agama</th><th>Sekolah</th><th>Aksi</th>
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
        echo "<td>".$maba['sekolah_asal']."</td>";

        echo "<td>";
        echo "<a href='form-edit.php?id=".$maba['id']."' class='btn btn-edit'>Edit</a> ";
        echo "<a href='hapus.php?id=".$maba['id']."' class='btn btn-hapus' onclick='return confirm(\"Yakin ingin menghapus data ini?\")'>Hapus</a>";
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