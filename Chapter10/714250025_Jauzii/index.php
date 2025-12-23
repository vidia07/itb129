<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru Harvard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <header class="header">
        <h1>Pendaftaran Mahasiswa Baru</h1>
        <p>Harvard University</p>
    </header>

    <nav class="menu">
        <a href="form-daftar.php">Daftar</a>
        <a href="list-maba.php">Pendaftaran</a>
    </nav>

    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'sukses') {
            echo "<div class='alert'>Pendaftaran mahasiswa baru berhasil!</div>";
        } else {
            echo "<div class='alert'>Pendaftaran gagal. Silakan coba lagi.</div>";
        }
    }
    ?>

</div>

<script>
    if (window.location.search.includes('status')) {
        window.history.replaceState(null, null, window.location.pathname);
    }
</script>

</body>
</html>
