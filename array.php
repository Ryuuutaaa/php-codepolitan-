
<?php
    $a = ["ayam", "sapi", "kerbau", "babii", "macan"];

    $a[] = "kuda"; // dimasukan pada diakhir index macan 
    $a[99] = "nenen";
    $a[0] = "jangkrik";

    var_dump($a); //  var_dam menjelaskan lebih lengkap
    echo $a[9] ?? ""; // namanya adalah operator coalescing sejenis ternary function pada javascript 

?>