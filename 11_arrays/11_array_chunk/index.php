<?php

    $arr = range(1, 20);
    print_r($arr);
    echo "<br>";

    // Aqui ele pega o $arr e divide em arrays que tenham 10 indices em cada, ou seja, tera dois arrays
    $array = array_chunk($arr, 10);
    print_r($array);
    echo "<br>";

    // Aqui ele vai imprimir o segundo array da variavel $array, 1 é o indice.
    print_r($array[1]);
    echo "<br>";

    // Aqui ele vai imprimir o segundo array da variavel $array, 0 é o indice.
    print_r($array[0]);
    echo "<br>";
?>