<?php

    class Humano {

        public $profissao;

        public function falar() {
            echo "Boa noite a todos! <br>";
        }

        private function trabalhar() {
            echo "Vou trabalhar agora <br>";
        }

        public function getAcessaTrabalhar() {
            $this->trabalhar();
        }

        protected function caminhar() {
            echo "Vou caminhar agora <br>";
        }

        public function getAcessaCaminhar() {
            $this->caminhar();
        }

    }

    class Desenvolvedor extends Humano {

        public $linguagem = "PHP";

        public function getAcessaTrabalharDesenvolvedor() {
            $this->getAcessaTrabalhar();
        }

        public function getAcessaCaminharDesenvolvedor() {
            $this->getAcessaCaminhar();
        }

        public function estaProgramando() {
            echo "O desenvolvedor está programando em $this->linguagem <br>";
        }

    }

    $matheus = new Desenvolvedor;
    $daphne = new Humano;

    $daphne->falar();
    $matheus->falar();

    $matheus->getAcessaCaminharDesenvolvedor();
    $matheus->getAcessaCaminhar();

    $daphne->getAcessaTrabalhar();

    echo $daphne->profissao = "Veterinaria" . "<br>";
    echo $matheus->profissao = "Desenvolvedor" . "<br>";

    //Humano não pode acessar um metodo da classe filha mas vice versa pode.
    // $daphne->getAcessaTrabalharDesenvolvedor();

    echo $matheus->estaProgramando();

?>