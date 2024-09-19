<?php

    class Animal {

        public $nome;

        function escolherNome($nome) {
            $this->nome = $nome;
        }

        function latir() {
            return "Au au <br>";
        }

        function latirForte() {
            return strtoupper($this->latir());
        }

    }

    $bruce = new Animal;

    echo "O nome do animal é: $bruce->nome <br>";

    $bruce->escolherNome("Bruce");
    echo "O nome do animal é: $bruce->nome <br>";

    echo $bruce->latir();
    echo $bruce->latirForte();

?>