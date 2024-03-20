<?php

    echo 5 / 2;
    echo "<br>";

    if(is_float(5/2)) {
        echo "é float <br>";
    }

    echo 2 . 3;
    echo "<br>";

    if(is_float(2 . 3)) {
        echo "é string <br>";
    }

    $nome = "Matheus";
    $sobrenome = "Assumpção";
    $nomeCompleto = $nome . " " . $sobrenome;

    echo $nomeCompleto;

?>