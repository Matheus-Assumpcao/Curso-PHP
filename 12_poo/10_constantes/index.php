<?php

    class Humano {

        public const OLHOS = 2;
        public const NARIZ = 1;
        public const BOCA = 1;

        function mostraConstante() {

            echo self::NARIZ . "<br>";
        }

    }

    $matheus = new Humano;

    echo $matheus::OLHOS . "<br>";
    echo $matheus::NARIZ . "<br>";
    echo $matheus::BOCA . "<br>";

    $matheus->mostraConstante();

?>