<?php

    function soma($n1, $n2) {

        return $n1 + $n2;

    }

    echo soma(4, 5) . "<br>";

    $x = soma(2, 4);

    echo $x . "<br>";

    $y = soma($x, 50);

    echo $y . "<br>";

    function testeRetorno() {

        return "testando";

    }

    $z = testeRetorno();

    echo $z . "<br>";

?>