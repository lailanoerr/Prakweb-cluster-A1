<!DOCTYPE html>
<html>
<head>
    <title>Praktikum Web Kalkulator Laila Noer Islami H</title>
</head>
<body>
    <?php
    $m=20;
    $n=15;

    echo "bilangan 1 = $m";
    echo "<br/>";
    echo "bilangan 2 = $n";
    echo "<br/>";

    echo "<br/>Berikut merupakan hasil dari setiap operasi<br/>";


    echo "<br/> PENJUMLAHAN <br/>";
    $a=$m+$n;
    echo "Operator : + ";
    echo "<br/>";
    echo "Hasil : $a";
    echo "<br/>";
    
    echo "<br/> PENGURANGAN <br/>";
    $b=$m-$n;
    echo "Operator : - ";
    echo "<br/>";
    echo "Hasil : $b";
    echo "<br/>";

    echo "<br/> PERKALIAN <br/>";
    $c=$m*$n;
    echo "Operator : * ";
    echo "<br/>";
    echo "Hasil : $c";
    echo "<br/>";

    echo "<br/> PEMBAGI <br/>";
    $d=$m/$n;
    echo "Operator : / ";
    echo "<br/>";
    echo "Hasil : $d";
    echo "<br/>";

    echo "<br/> MODULUS <br/>";
    $e=$m%$n;
    echo "Operator : % ";
    echo "<br/>";
    echo "Hasil : $e";
    echo "<br/>";

    ?>
</body>
</html>