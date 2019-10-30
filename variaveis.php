<?php
    $dado=10;
    $nome="Paulo";
    $num=10.50;
    echo "Olá meu amigo $nome";
    echo "<br><br>";
    echo 'Olá meu amigo $nome';
    echo '<br><br>';
    echo 'Olá "meu amigo" mario';
    echo '<br><br>';
    echo "Olá \"meu amigo\" mario";
    echo '<br><br>';
    echo 'Olá meu amigo ' . $nome . "<br>";
    echo '';
    echo '';
    $t = "Primeiro";
    $t .= "Segundo";
    $t .= "Terceiro";
    echo $t;
    echo '<br><br>';
    define("constante","123");
    echo 'O valor da constante é ' . constante;
    
?>

<h1> <?=$nome; ?></h1>