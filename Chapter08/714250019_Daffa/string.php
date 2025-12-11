<?php
    $nama = 'Roni Andarsyah'; //tanda petik satu

    $pesan = "Selamat datang {$nama}"; //tanda petik dua
    $pesan2 = 'Selamat datang {$nama}'; //tanda petik satu

    # ketika di-echo
    echo $pesan . '<btr>'; # Selamat datang Nurul Huda
    echo $pesan2 . '<br>'; # Selamat datang {$nama}
?>