<?php

    class Carro {

        public $marca;
        public $modelo;
        public $velocidadeMaxima;

        function setVelocidadeMaxima($vel) {
            $this->velocidadeMaxima = $vel;
        }

        function getVelocidadeMaxima() {
            echo "A velocidade maxima deste carro é: $this->velocidadeMaxima hm/h <br>";
        }

    }

    $yaris = new Carro;
    $yaris->marca = "Toyota";
    $yaris->modelo = "Yaris XL";
    $yaris->velocidadeMaxima = 120;

    $yaris->setVelocidadeMaxima(130);
    echo $yaris->getVelocidadeMaxima($yaris->velocidadeMaxima);

?>