<?php

    class Pessoa {

        function falar() {
            echo "Ola, eu sou um objeto <br>";
        }

        function somar($x, $y) {
            echo $x + $y . "<br>";
        }

    }

    $matheus = new Pessoa;
    $matheus->falar();
    $matheus->somar(2, 5);

    $joao = new Pessoa;
    $joao->falar();
    $joao->somar(7, 1);

?>