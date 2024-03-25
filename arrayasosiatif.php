<?php 
    // $datadiri = [
    //     "nama" => "rafi",
    //     "umur" => 19,
    //     "slogan" => "Aku ganteng",
    // ];

    // echo "Nama : " . " " . $datadiri["nama"];
    // echo "Umur : " . " " . $datadiri["umur"];
    // echo "Slogan : " . " " . $datadiri["slogan"];



    $alamat = [
        "mahiru" => "malang",
        "shiina" => "denpasar",
        "itsuki" => "bali",
    ];

    foreach($alamat as $x => $value){
        echo "Alamat : " . $x . " di " . $value . "<br>"; 
    }

    
?>