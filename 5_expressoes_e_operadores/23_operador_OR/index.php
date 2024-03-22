<?php

    $v = "teste";
    $x = 5;
    $y = 15;
    $z = "teste2";

    if($x > $y || $z === $z) {
        echo "A operação 1 é verdadeira <br>";
    } 
    else {
        echo "A operação 1 é falsa <br>";
    }

    if($y > $x || $z === $z) {
        echo "A operação 2 é verdadeira <br>";
    } 
    else {
        echo "A operação 2 é falsa <br>";
    }

    if($x > $y || $z === $v) {
        echo "A operação 3 é verdadeira <br>";
    } 
    else {
        echo "A operação 3 é falsa <br>";
    }

    if(($x > $y && $y < $x) || $v === $v) {
        echo "A operação 4 é verdadeira <br>";
    } 
    else {
        echo "A operação 4 é falsa <br>";
    }

    if(($x > $y && $y < $x) || $v === $z) { // basta um dos lados ser true para a resposta ser true
        echo "A operação 5 é verdadeira <br>";
    } 
    else {
        echo "A operação 5 é falsa <br>";
    }
?>