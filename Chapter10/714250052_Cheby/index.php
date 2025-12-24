<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
        <h1>Politeknik Pos Indonesia</h1>

    </header>

    <nav>
        <ul>
            <li><a href="form-daftar.php" class="btn btn-oren">Daftar</a></li>
            <li><a href="list-maba.php" class="btn btn-oren">Pendaftar</a></li>
        </ul>
    </nav>


    <?php if(isset($_GET['status'])): ?>
    <div style="text-align: center; margin-top: 20px;">
        <p style="font-weight: bold; font-size: 1.2em;">
            <?php
                if($_GET['status'] == 'sukses') {
                    echo "Pendaftaran mahasiswa baru POLTEKPOS berhasil!";
                } else {
                    echo "Pendaftaran gagal!";
                }
            ?>
        </p>
    </div>
    <?php endif; ?>

</body>
</html>