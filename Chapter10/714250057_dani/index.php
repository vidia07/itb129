<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pendaftaran</title>
</head>
<body>
    <header>
    <h3>pendaftaran mahasiswa baru</h3>
    <h1>poltekpos</h1>
    </header>

    <h4>menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar</a></li>
            <li><a href="list-maba.php">pendaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "<span class='sukses'>Pendaftaran mahasiswa baru berhasil!</span>";
                } else {
                    echo "<span class='gagal'>Pendaftaran gagal!</span>";
                }
            ?>
        </p>
    <?php endif; ?>
</body>
</html>