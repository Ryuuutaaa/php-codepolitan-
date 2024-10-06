<?php

$alas = 10;
$tinggi = 25;

function luasSegitiga($alas, $tinggi)
{
    $luas = $alas * $tinggi / 2;
    return $luas;
}

function jajarGenjang($alas, $tinggi)
{
    $luas = ($alas + $tinggi) * 2;
    return $luas;
}

echo $luasSegitiga = luasSegitiga($alas, $tinggi);
echo $luasJajarGenjang = jajarGenjang($alas, $tinggi);
