<?php
$anggota = [
    ["nama" => "Toni", 'gol_darah' => "O"],
    ["nama" => "Kresna", 'gol_darah' => "B"],
    ["nama" => "Toni", 'gol_darah' => "C"],

];

$data = json_decode($anggota);
file_put_contents("data.txt", $data);

$output = file_get_contents("data.txt");
$hasil = json_decode($output, true);
print_r($hasil);
