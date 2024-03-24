<?php 
    $nama = ucwords("rafi"); // menandai setiap awal huruf akan diubah menjadi huruf kapital
    $asal = strtoupper("badung"); // memnandai semua huruf akan dibuah menjadi huruf kapital 
    $umur = 18;

    function pesan($depan, $belakang){
        echo $depan . " " . $belakang;
    }

    pesan("evos", "eman"); // untuk memanggil function yang berisi parameter

    $slogan  = "<h1>Ada raket kita baywan</h1>";
    $jabawan = "<h1>Koknya mana</h1>";

    echo $slogan . " " . $jabawan;
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Halooo nama akuuu <?= $nama ?></h1>
        <h1>Aku berasal dari <?=    $asal ?> </h1>
        <h1>Aku berumur <?= $umur ?> </h1>
    </main>
</body>
</html>