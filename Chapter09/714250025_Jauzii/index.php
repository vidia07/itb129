<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru HARVARD</title>
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
        <h3>Harvard University</h3>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar</a></li>
            <li><a href="list-maba.php">Pendaftaran</a></li>
        </ul>
    </nav>
    <?php if (isset($_GET['status'])): ?>
    <p>
        <?php
        if ($_GET['status'] == 'sukses') {
            echo "Pendaftaran mahasiswa baru berhasil!";
        } else if ($_GET['status'] == 'gagal') {
            echo "Pendaftaran gagal. Silakan coba lagi.";
        }
        ?>
    </p>
    <?php endif; ?>
</body>
</html>