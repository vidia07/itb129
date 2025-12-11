<?php
    $bill1 = 100;
    $bill2 = 20;
    $teks1 = "PHP";
    $teks2 = "php";
    $hasil = ($bill1 <> $bill2) or ($teks1 == $teks2);
    printf("(%d <> %d) or (%s == %s) adalah %d<BR> \n",
    $bill1, $bill2, $teks1, $teks2, $hasil);
    printf("! (%s == %s) adalah %d <BR> \n", $teks1, $teks2, $hasil);
?>