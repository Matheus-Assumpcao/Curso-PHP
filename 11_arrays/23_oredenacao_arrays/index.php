<?php

    $arr = [9, 2, 8, 5, 1, 90, 27, 10, 3, 49];

    // Não precisa colocar numa variavel pois muda o array original
    sort($arr);

    print_r($arr);
    echo "<br>";

    $arr2 = [9, 2, 8, 5, 1, 90, 27, 10, 3, 49];

    rsort($arr2);

    print_r($arr2);
    echo "<br>";

    $nomes = ['Matheus', 'Daphne', 'Bruce', 'Nino'];

    sort($nomes);

    print_r($nomes);
    echo "<br>";

?>