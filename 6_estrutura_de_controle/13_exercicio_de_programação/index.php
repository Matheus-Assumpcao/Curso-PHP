<?php

    function compararNumeros($a, $b){

        if($a > $b) {
            echo "O primeiro número é maior <br>";
        }
        elseif($a < $b) {
            echo "O segundo número é maior <br>";
        }
        elseif($a == $b) {
            echo "Os números são iguais <br>";
        }
    }

    compararNumeros(12, 15);
    compararNumeros(19, 19);
    compararNumeros(29, 8);

?>