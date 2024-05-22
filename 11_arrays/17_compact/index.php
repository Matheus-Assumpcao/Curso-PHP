<?php

    // Cria um Array Associativo a partir de variaveis
    $marca = "Audi";
    $modelo = "Q3";
    $ano = 2024;
    $tetoSolar = true;

    // No compact deve-se passar os nomes das variaveis como String
    $carro = compact("marca", "modelo", "ano", "tetoSolar");

    print_r($carro);

?>