<?php

$siswa = [
    ["nama" => "toni", "kelas" => "2A"],
    ["nama" => "kresna", "kelas" => "3A"],
    ["nama" => "palupi", "kelas" => "4A"],
    ["nama" => "hani", "kelas" => "4A"],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Gol.Darah</th>
        </tr>

        <?php foreach ($siswa as $key => $value) { ?>
            <tr>
                <th><?php $value["kelas"] ?></th>
                <th><?php $value["nama"] ?></th>
            </tr>
        <?php } ?>
    </table>
</body>

</html>