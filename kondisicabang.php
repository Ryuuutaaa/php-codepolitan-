<?php
$nilai = $_POST["nilai"];

if ($nilai >= 90) {
    echo "Nilai A";
} else if ($nilai >= 70) {
    echo "Nilai B";
} else if ($nilai >= 50) {
    echo "Nilai C";
} else {
    echo "NIlai E";
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
    <form action="kondisicabang.php" method="POST">
        <label for="">masukan nilai</label>
        <input type="number" name="nilai">
        <input type="submit" value="submit nilai">
    </form>
</body>

</html>