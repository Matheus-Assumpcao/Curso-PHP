<?php

    // Array Splice remove os itens de um array da direita para esquerda
    $arr = [1, 2, 3, 4, 5, 6, 7, 8];

    // Primeiro paramentro é a variavel; Segundo parametro é o indice de onde começar; Terceiro Parametro é quantos itens serão retirados
    $removidos = array_splice($arr, 2, 3);

    print_r($removidos);
    echo "<br>";

    print_r($arr);
    echo "<br>";

    // Array Splice remove os itens de um array da direita para esquerda
    $arr2 = [1, 2, 3, 4, 5, 6, 7, 8];
    // Primeiro paramentro é a variavel; Segundo parametro é o indice de onde começar; Terceiro Parametro é quantos itens serão retirados e quando não houver, ira retirar até o final
    $removidos2 = array_splice($arr2, 2);

    print_r($removidos2);
    echo "<br>";

    print_r($arr2);
    echo "<br>";

    // Array Splice remove os itens de um array da direita para esquerda
    $arr3 = [1, 2, 3, 4, 5, 6, 7, 8];
    // Primeiro paramentro é a variavel; Segundo parametro é o indice de onde começar; Terceiro Parametro é quantos itens serão retirados e 
    //quando for negativo sera a quantidade de itens da direita para esquerda que deverão não ser retirado, ou seja, ira retirar do parametro 2 até o final - terceiro parametro.
    $removidos3 = array_splice($arr3, 2, -1);

    print_r($removidos3);
    echo "<br>";

    print_r($arr3);
    echo "<br>";

?>