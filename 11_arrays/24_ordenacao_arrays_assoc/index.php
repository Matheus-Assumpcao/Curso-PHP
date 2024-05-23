<?php

    $arr = [
        'Matheus' => 22,
        'Nino' => 3,
        'Bruce' => 4,
        'Daphne' => 21
    ];

    // Ordem crescente dos valores
    asort($arr);

    print_r($arr);
    echo "<br>";

    $arr2 = [
        'Matheus' => 22,
        'Nino' => 3,
        'Bruce' => 4,
        'Daphne' => 21
    ];

    // Ordem decrescente dos valores
    arsort($arr2);

    print_r($arr2);
    echo "<br>";

    $arr3 = [
        'Matheus' => 22,
        'Nino' => 3,
        'Bruce' => 4,
        'Daphne' => 21
    ];

    // Ordem crescente das chaves
    ksort($arr3);

    print_r($arr3);
    echo "<br>";

    $arr4 = [
        'Matheus' => 22,
        'Nino' => 3,
        'Bruce' => 4,
        'Daphne' => 21
    ];

    // Ordem decrescente das chaves
    krsort($arr4);

    print_r($arr4);
    echo "<br>";


?>