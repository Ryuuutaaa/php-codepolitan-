<?php

$warna = ["merah", "biru", "kuning", "oranye", "violet", "ingu", "hijau"];

$jumlah_warna = 0;

$i = 0;

while ($i < 15) {
    if ($warna[$i] == 'merah') {
        $jumlah_warna++;
    }
}

echo "jumlah warna pada array sebanyak $jumlah_warna kali";
