<?php
$siswa = [
    ["nama" => "toni", "kelas" => "2A"],
    ["nama" => "kresna", "kelas" => "3A"],
    ["nama" => "palupi", "kelas" => "4A"],
    ["nama" => "hani", "kelas" => "4A"],
];


foreach ($siswa as $key => $value) {
    if ($value["kelas"] === "2A")
        continue;

    echo "Nama" . $value["nama"] . "<br>";
    echo "Kelas" . $value["kelas"] . "<br>";
}
