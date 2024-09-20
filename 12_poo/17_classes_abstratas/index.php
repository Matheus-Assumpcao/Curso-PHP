<?php

    abstract class Teste {

        public static function testandoClasse() {

            echo "Este metodo é de uma classe abstrata <br>";

        }

        abstract public function testeAbs();

    }

    // $t = new Teste -> não da para instanciar uma classe abstrata

    Teste::testandoClasse();

    class Nova extends Teste {

        public function testeAbs() {
            echo "Teste metodo abstrato <br>";
        }

    }

    $n = new Nova;
    $n->testeAbs();

?>