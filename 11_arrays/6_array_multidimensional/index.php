<?php

    $arr = [
        [1, 2, 3],
        [2, 4, 6]
    ];

    print_r($arr);
    echo "<br>";

    echo $arr[0][1] . "<br>"; // acessando o primeiro array, e o segundo elemento
    echo $arr[1][2] . "<br>"; // acessando o segundo array, e o ultimo elemento

    echo count($arr) . "<br>";
    echo count($arr[0]) . "<br>";
    echo count($arr[1]) . "<br>";

?>