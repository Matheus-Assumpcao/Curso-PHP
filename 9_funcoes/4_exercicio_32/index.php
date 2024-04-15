<?php

    function multi() {

        $a = 5;
        $b = 2;
        $c = 10;

        echo $a * $b . "<br>";
        echo $b * $c . "<br>";
        echo $c * $a . "<br>";

        $resultado = $a * $c * $b;

        echo $resultado . "<br>";

    }

    multi();
?>