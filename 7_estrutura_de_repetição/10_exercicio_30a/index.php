<?php

    $arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
    $i = 0;

    // MODO 1 - EU
    for($i; $i <= count($arr); $i+=2) {

        echo "Laço de repetição do array <br> $i <br>";

    }

    // MODO 2 - Professor
    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i] % 2 == 0) {
            echo "Número: $arr[$i] <br>";
        }
    }

?>