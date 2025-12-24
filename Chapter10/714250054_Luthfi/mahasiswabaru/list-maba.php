
<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftar Mahasiswa Baru | ULBI</title>
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
    color: #333;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 20px;
}

/* Header dengan warna putih */
header {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 15px;
    padding: 20px;
    margin-bottom: 20px;
    text-align: center;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 800px;
}

header h3 {
    font-size: 1.8em;
    margin-bottom: 10px;
    color: #333;
}

/* nav dengan warna putih */
nav {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 15px;
    padding: 15px;
    margin-bottom: 20px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 800px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 10px;
    background: #3f3f3fff;
    transition: all 0.3s ease;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

nav a:hover {
    background: #e9ecef;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

/* Tabel dengan warna putih */
table {
    background: #fff;
    border-collapse: collapse;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 800px;
    margin-bottom: 20px;
}

th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background: #f8f9fa;
    font-weight: bold;
    color: #333;
}

td {
    color: #555;
}

tbody tr:hover {
    background: #f8f9fa;
}

td a {
    color: #007bff;
    text-decoration: none;
    margin-right: 10px;
}

td a:hover {
    text-decoration: underline;
}

/* Pesan status */
p {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 15px;
    text-align: center;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: 0 auto;
}

/* Responsivitas untuk perangkat kecil */
@media (max-width: 768px) {
    nav {
        flex-direction: column;
        gap: 10px;
    }

    table {
        font-size: 0.9em;
    }

    th, td {
        padding: 8px 10px;
    }

    header h3 {
        font-size: 1.5em;
    }
}
    </style>
</head>
<body>

    <header>
        <h3>Pendaftar Mahasiswa Baru</h3>
    </header>

    <nav>
        <a href="index.php">← Kembali ke Beranda</a>
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
        $sql = "SELECT * FROM pendaftaran";
        $query = mysqli_query($db, $sql);

        $no = 1;
        while ($maba = mysqli_fetch_array($query)) {
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
<p>Total: <?php echo mysqli_num_rows($query); ?></p>
</body>
</html>
