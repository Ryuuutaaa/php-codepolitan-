<?php

$warna = ["merah", "biru", "kuning", "oranye", "violet", "ingu", "hijau"];

$jumlah_warna = 0;

foreach ($warna as $nomor => $nilai) {
    echo "Index ke-$nomor berisi nilai $nilai <br>";

    if ($nilai == 'merah') {
        $jumalh_merah++;
    }
}

echo "jumlah warna pada array sebanyak $jumlah_warna kali";
