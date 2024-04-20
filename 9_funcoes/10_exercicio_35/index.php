<?php

    function retornaAoQuadrado($n) {

        return $n * $n;

    }

    $z = retornaAoQuadrado(5);
    echo $z;

    function retornaAoQuadrado2($n) {

        $resultado = $n ** 2;
        return $resultado;

    }

    echo retornaAoQuadrado2(5);
?>