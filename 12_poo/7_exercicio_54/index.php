<?php

    class Pessoa {

        public $nome;
        public $idade;

        function andar($nome, $m) {
            echo "O $nome andou $m metros <br>";
        }
    }

    $matheus = new Pessoa;
    $matheus->nome = "Matheus";
    $matheus->idade = 22;
    $matheus->andar($matheus->nome, 1000);
    echo "O $matheus->nome tem $matheus->idade anos";

?>