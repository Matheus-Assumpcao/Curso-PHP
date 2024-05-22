<?php

    $arr = [
        'Carro' => 'BMW',
        'Modelo' => 'X6',
        'Ano' => 2024,
        'Motor' => 3.0,
        'Valor de Mercado' => 1500000,00
    ];

    $chaves = array_keys($arr);
    print_r($chaves);
    echo "<br>";

    $valores = array_values($arr);
    print_r($valores);
    echo "<br>";

?>