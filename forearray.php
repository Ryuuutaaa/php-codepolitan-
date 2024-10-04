<?php

$warna = ["merah", "biru", "kuning", "oranye", "violet", "ingu", "hijau"];

$jumlah_warna = 0;

for ($i = 0; $i < 15; $i++) {
    if ($warna[$i] == "violet") {
        $jumlah_warna++;
    }
}


echo "jumlah warna pada array sebanyak $jumlah_warna kali";
