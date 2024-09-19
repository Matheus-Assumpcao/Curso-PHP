<?php

    class Humano {

        public $idade = 22;

        public function falar() {
            echo "Olá Mundo! <br>";
        }

        private function gritar() {
            echo "AHHHHHHHHHHH <br>";
        }

        public function acessaGritar() {
            $this->gritar();
        }

        protected function falarBaixinho() {
            echo "shiuu <br>";
        }

        public function acessaFalarBaixinho() {
            $this->falarBaixinho();
        }

    }

    class Programador extends Humano {

        public function acessaFalarBaixinhoProgramador() {
            $this->falarBaixinho();
        }

    }

    $bruce = new Humano;
    $bruce->falar();
    $bruce->acessaFalarBaixinho();

    $matheus = new Programador;
    echo $matheus->idade . " anos <br>";
    $matheus->falar();
    $matheus->acessaGritar();
    $matheus->acessaFalarBaixinhoProgramador();

?>