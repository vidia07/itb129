<?php
    $nama = 'Shany Aulia'; //tanda petik satu

    $pesan = "Selamat datang {$nama}"; //tanda petik dua
    $pesan2 = 'Selamat datang {$nama}'; //tanda petik satu

    # ketika di-echo
    echo $pesan . '<br>'; # Selamat datang Shany Aulia
    echo $pesan2 . '<br>'; # Selamat datang {$nama}
?> 