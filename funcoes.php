<?php
    function escrever(){
        echo "Olá mundo";
    }
    escrever();

    function calcular ($n1,$n2){
        $total = $n1+$n2;
        return $total;
    }

    $x=1;
    $y=2;

    calcular($x,$y);

    calcular();

    $a= "Olá";

    echo $a;
    function exibir(&$a){
        echo "Hello";
    }
?>