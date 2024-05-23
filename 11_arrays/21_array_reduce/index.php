<?php

    $arr = [2, 67, 90, 10, 1, 39, 56, 122];

    function soma($a, $b) {
        return $a + $b;
    }

    $resultado = array_reduce($arr, "soma");

    echo "$resultado <br>";

    function sub($a, $b) {
        return $a - $b;
    }

    $resultado2 = array_reduce($arr, "sub");

    echo "$resultado2 <br>";

?>