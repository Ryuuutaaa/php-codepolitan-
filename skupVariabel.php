<?php
function cetakPesan($nama = null)
{
    $gol_dar = "B";

    if (empty($nama)) {
        echo "Selamat Datang";
    } else {
        echo "Selamat Datan $nama";
    }
}

$nama = "Rafi";
echo $gol_dar; // akan error karna variabel tersebut berada di dalam function

cetakPesan($nama);
