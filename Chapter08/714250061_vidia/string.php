<?php
    $nama = 'Roni Andarsyah'; //tanda petik satu

    $pesan = "selamat datang {$nama}"; //tanda petik dua
    $pesan2 = 'selamat datang {nama}'; //tanda petik satu

    # ketika di-echo
    echo $pesan . '<br>';  # Selamat datang Nurul Huda
    echo $pesan2 . '<br>'; # Selamat datang {$nama} 
?>
