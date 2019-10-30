<?php 
    $frutas = array('maça','banana','abacate');
    echo $frutas[2];
    echo "<br>";
    $frutas = array("a" => "maça", "b" => "banana", "c" => "abacate");
    echo $frutas["a"];
    $frutas["d"] = "manga";
    echo "<br>";
    echo count($frutas);
    echo "<br>";
    echo print_r($frutas);
    echo "<br>";
    echo var_dump($frutas);
    echo "<br>";
    echo in_array('banana', $frutas);
    echo "<br>";
    echo in_array('bananaa', $frutas);
    echo "<br>";
    echo array_search('abacate', $frutas);
    echo "<br>";
    echo array_search('abacate', $frutas);
?>