<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru POLTEKPOS</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container">
        <header>
            <h3>Pendaftaran Mahasiswa Baru</h3>
            <h1>Politeknik Pos Indonesia</h1>
        </header>

        <h4>Menu Utama</h4>
        <nav>
            <ul>
                <li><a href="form-daftar.php">Daftar Baru</a></li>
                <li><a href="list-maba.php">Lihat Pendaftar</a></li>
            </ul>
        </nav>

        <?php if(isset($_GET['status'])): ?>
            <p class="status">
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Pendaftaran mahasiswa baru berhasil!";
                    } else {
                        echo "Pendaftaran gagal!";
                    }
                ?>
            </p>
        <?php endif; ?>
    </div>
</body>
</html>