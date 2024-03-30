<?php
$tujuan = "surabaya";
$tarif = 100000;
$diskon = 10000;

if ($tujuan === "surabaya" || $tujuan === "malang") {

    $tarif = $tarif - $diskon;
    echo "total nya adalah : " . $tarif;
}
