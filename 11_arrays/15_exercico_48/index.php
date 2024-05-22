<?php

    $arr = ["batata", "maça", "pera", "feijão", "arroz"];
    $removidos = array_splice($arr, 2, -1);

    print_r($removidos);
    echo "<br>";

    $arr2 = ["batata", "maça", "pera", "feijão", "arroz"];
    $removidos2 = array_splice($arr2, 2, 2);

    print_r($removidos2);
    echo "<br>";

?>