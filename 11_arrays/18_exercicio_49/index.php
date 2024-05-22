<?php

    $especie = "Cachorro";
    $raca = "Buldogue Frances";
    $nome = "Bruce";
    $cor = "Rajado";
    $peso = 13.2;
    $idade = "3 anos e 7 meses";

    $animal = compact("especie", "raca", "nome", "cor", "peso", "idade");

    foreach($animal as $caracteristica => $value) {

        echo "$caracteristica: $value <br>";
    }

?>