<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru POLTEKPOS</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('https://i0.wp.com/ulbi.ac.id/wp-content/uploads/2025/04/ULBI.jpg?w=800&ssl=1');
             background-position: center;
             background-attachment: fixed;
             background-size: cover;
            color: #333;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        header {
            text-align: center;
            margin-bottom: 30px;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px;
        }
        h3 {
            margin: 10px 0;
            color: #000000ff;
        }
        h4 {
            color: #fff;
            margin-bottom: 10px;
        }
        nav {
            background: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }
        li {
            margin: 0 15px;
        }
        a {
            text-decoration: none;
            color: #667eea;
            font-weight: bold;
            padding: 10px 20px;
            border: 2px solid #667eea;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        a:hover {
            background-color: #667eea;
            color: #fff;
        }
        p {
            background: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px;
            text-align: center;
            color: #000000ff;
        }
    </style>
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
        <h3>Politeknik Pos Indonesia</h3>
    </header>

    <h4>Menu:</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar</a></li>
            <li><a href="list-maba.php">Pendaftar</a></li>
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
