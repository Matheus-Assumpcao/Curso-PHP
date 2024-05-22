<?php

    $arr = [2, 4, 6, 8, 10, 12, 14, 16, 18];

    $slice = array_slice($arr, 0, 2);
    print_r($slice);
    echo "<br>";

    $slice2 = array_slice($arr, 1, 5);
    print_r($slice2);
    echo "<br>";

    // Omitindo o ultimo parametro, ele vai até o final do array
    $slice3 = array_slice($arr, 4);
    print_r($slice3);
    echo "<br>";

    // Negativando o ultimo paramentro, ele vai até o final - x ultimos indices do array
    $slice4 = array_slice($arr, 4, -2);
    print_r($slice4);
    echo "<br>";

?>