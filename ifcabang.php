<?php

$nilai = $_POST["nilai"];
$predikaat = $_POST["predikat"];

if ($nilai >= 90) {
    echo "kamu hebat";

    if ($predikaat >= "A") {
        echo "Pertahankan";
    } else if ($predikaat >= "B") {
        echo "Lumayan";
    } else {
        echo "cukup";
    }
} else if ($nilai >= 70) {
    echo "lumayan hebat";
    if ($predikaat >= "A") {
        echo "Pertahankan";
    } else if ($predikaat >= "B") {
        echo "Lumayan";
    } else {
        echo "cukup";
    }
} else {
    echo "cukup hebat";
    if ($predikaat >= "A") {
        echo "Pertahankan";
    } else if ($predikaat >= "B") {
        echo "Lumayan";
    } else {
        echo "cukup";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">Nilai</label>
        <input type="number" name="nilai">
        <label for="">Predikat</label>
        <select name="predikat" id="">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>
        <input type="submit" value="submit">
    </form>
</body>

</html>