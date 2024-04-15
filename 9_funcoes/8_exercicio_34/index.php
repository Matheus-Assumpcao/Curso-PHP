<?php

    function numeros($num) {

        if($num % 2 === 0) {
            echo "O número $num: é par <br>";
        }
        else {
            echo "O número $num: é ímpar <br>";
        }
    }

    numeros(2);
    numeros(9);
    numeros(0);

?>