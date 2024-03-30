<?php
if (!empty($_POST['proses'])) {
    print_r($_POST);
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
    <form action="" method="post">
        nama <input type="text" name="nama" id="">
        alamat <input type="text" name="alamat" id="">
        Program studi :
        <select name="program_studi" id="">
            <option value="SI">Sistem Informasi</option>
            <option value="TI">Teknik informatika</option>
            <option value="MI">Manajenin Informatika</option>
        </select>
        <br><br>
        <input type="submit" value="submit" name="proses">
    </form>
</body>

</html>