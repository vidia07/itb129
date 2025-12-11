<?php
    $nama = 'Rhaya Wibawareksa'; // tanda petik satu
    $pesan1 = "Selamat datang {$nama}"; // tanda petik dua
    $pesan2 = 'Selamat datang {$nama}'; // tanda petik satu

    # ketika di-echo
    echo $pesan1 . '<br>'; # Selamat datang Nurul Huda;
    echo $pesan2 . '<br>'; # Selamat datang {$nama};
?>