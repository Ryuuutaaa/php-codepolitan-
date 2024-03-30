<?php
$nama = $_GET["nama"];
$alamat = $_GET["alamat"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="text" name="nama">
        <input type="text" name="alamat">
        <button type="submit">SUBMIT</button>
    </form>
    <h2>Selamat datang, <?= $nama ?></h2>
    <p>Alamat kamu ada di <?= $alamat ?> </p>
    <p>Selamat belajar</p>
</body>

</html>