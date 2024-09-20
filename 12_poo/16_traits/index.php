<?php

    trait Objeto {

        public function teste() {
            echo "Testando trait de objeto <br>";
        }

    }

    trait Testando {

        public $y = 10;

        public function traitTest() {
            echo "Este metodo é da trait testando <br>";
        }

    }

    class Central {

        use Objeto;
        use Testando;

    }

    $x = new Central;

    $x->teste();
    $x->traitTest();
    echo $x->y . "<br>";

?>