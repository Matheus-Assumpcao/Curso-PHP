<?php

    $str = "Testando o explode";
    $fraseArray = explode(" ", $str);

    print_r($fraseArray);
    echo "<br>";

    $fraseArray2 = explode(",", $str);

    print_r($fraseArray2); // O SEPARADOR PRECISA EXISTIR NA STRING
    echo "<br>";

    $str2 = "Carro, Avião, Barco, Navio";
    $fraseArray3 = explode(",", $str2);

    print_r($fraseArray3);
    echo "<br>";

    for($i = 0; $i < count($fraseArray3); $i++) {

        echo "$fraseArray3[$i] <br>";
        
    }

?>