
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru ULBI</title>
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: url('https://cloud.jpnn.com/photo/jatim/news/normal/2024/07/13/universitas-logistik-dan-bisnis-internasional-ulbi-membuka-d-rken.jpg') no-repeat center center fixed;
    background-size: cover;
    color: #fff; /* Teks putih untuk kontras */
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

/* Header dengan efek glass */
header {
    background: rgba(255, 255, 255, 0.1); /* Transparan untuk efek glass */
    -webkit-backdrop-filter: blur(10px); /* Blur untuk glassmorphism */
    backdrop-filter: blur(10px); /* Blur untuk glassmorphism */
    border: 1px solid rgba(255, 255, 255, 0.2); /* Border halus */
    border-radius: 15px; /* Sudut melengkung */
    padding: 20px;
    margin-bottom: 20px;
    text-align: center;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1); /* Bayangan halus */
}

header h3 {
    font-size: 1.8em;
    margin-bottom: 10px;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3); /* Bayangan teks untuk kedalaman */
}

/* Menu navigasi dengan efek glass */
h4 {
    font-size: 1.4em;
    margin-bottom: 10px;
    text-align: center;
    padding-bottom: 10px;
}

nav {
    background: rgba(255, 255, 255, 0.1);
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 15px;
    padding: 15px;
    margin-bottom: 20px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    gap: 2rem; /* Jarak antar item */
}

nav li a {
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.2); /* Transparan untuk glass */
    transition: all 0.3s ease; /* Transisi halus */
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
}

nav li a:hover {
    background: rgba(255, 255, 255, 0.3); /* Lebih terang saat hover */
    transform: translateY(-2px); /* Efek angkat */
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

/* Pesan status dengan efek glass */
p {
    background: rgba(255, 255, 255, 0.1);
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    padding: 15px;
    text-align: center;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin: 0 auto;
}

/* Pesan sukses dengan efek glass hejo */
p.success {
    background: rgba(0, 255, 0, 0.1); /* Hijau transparan */
    border: 1px solid rgba(0, 255, 0, 0.2);
}

/* Pesan error dengan efek glass beureum */
p.error {
    background: rgba(255, 0, 0, 0.1); /* Merah transparan */
    border: 1px solid rgba(255, 0, 0, 0.2);
}

/* Responsivitas untuk perangkat kecil */
@media (max-width: 768px) {
    nav ul {
        flex-direction: row;
        gap: 2rem;
    }
    
    header h3 {
        font-size: 1.5em;
    }
}
    </style>
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
        <h3>Universitas Logistik dan Bisnis Internasional</h3>
    </header>

    
    <nav>
        <h4>Menu</h4>
        <ul>
            <li><a href="form-daftar.php">Daftar</a></li>
            <li><a href="list-maba.php">Pendaftar</a></li>
        </ul>
    </nav>
    
    <?php if (isset($_GET['status'])): ?>
    <p class="<?php echo ($_GET['status'] == 'gagal') ? 'error' : 'success'; ?>">
        <?php
        if ($_GET['status'] == 'sukses') {
            echo "Pendaftaran berhasil!";
        }
        else if ($_GET['status'] == 'sukses-hapus') {
            echo "Hapus berhasil!";
        }else if ($_GET['status'] == 'sukses-edit') {
            echo "Update berhasil!";
        } else if ($_GET['status'] == 'gagal') {
            echo "Operasi gagal. Silakan coba lagi.";
        }
        ?>
    </p>
    <?php endif; ?>
</body>
</html>

