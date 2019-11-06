<?php
    $num = 10;
    if ($num == 10) {
        echo "O número é 10! <br>";
    }
    if (($num == 10) or ($num==20)) {
        echo "O número é 10 ou 20 <br>";
    }
    if ($num <> 10) {
        echo "Diferente de 10! <br>";
    }
    if (($num > 5) && ($num < 20)){
        echo "Número entre 5 e 20 <br>";
    }
    if (!$x) {
        echo "não existe x <br>";
    }
    if (!isset($x)) {
        echo "existe x <br>";
    }
    if ($num>5) {
        echo "Verdadeiro <br>";
    } else {
        echo "Falso <br>";
    }
    
    echo "<h1>SWITCH CASE</h1>";

    $caso=1;
    switch ($x) {
        case 0:
            echo "Caso 0";
            break;
        case 1:
            echo "Caso 1";
            break;
        default:
            echo "Default";
            break;
    }

    echo "<h1>FOR</h1>";

    for ($num=0; $num <10 ; $num++) { 
        echo "<p>for $num</p>";
    }

    echo "<h1>WHILE</h1>";

    $num=0;
    
    while ($num <= 10) {
        echo "<p>while $num</p>";
        $num++;
    }

    echo "<h1>DO WHILE</h1>";

    $num=0;

    do {
        echo "<p>do while $num</p>";
        $num++;
    } while ($num <= 10);
?>