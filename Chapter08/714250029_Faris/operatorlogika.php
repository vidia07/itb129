<?php
      $bil1 = 100;
      $bil2 = 20;
      $teks1 = "php";
      $teks2 = "php";
      $hasil = ($bill1 <> $bil2) or ($teks1 == $teks2);
      printf("(%d <> %d) or (%s == %s) adalah %d<BR>\n",
      $bil1, $bil2, $teks1, $teks2, $hasil);
      $hasil = ! ($teks1 == $teks2);
      printf("! (%s == %s) adalah %d<BR>\n",$teks1, $teks2, $hasil);
?>