<?php

    class Humano {

    }

    class Animal {

    }

    class Professor extends Humano {

    }

    $matheus = new Humano;
    $bruce = new Animal;
    $daphne = new Professor;

    if($matheus instanceof Humano) {
        echo "Matheus é um humano <br>";
    } else{
        echo "Matheus não é um humano <br>";
    }

    if($bruce instanceof Humano) {
        echo "Bruce é um humano <br>";
    } else{
        echo "Bruce não é um humano <br>";
    }

    if($daphne instanceof Humano) {
        echo "Daphne é uma humana <br>";
    } else{
        echo "Daphne não é uma humana <br>";
    }

    if($daphne instanceof Professor) {
        echo "Daphne é uma professora <br>";
    } else{
        echo "Daphne não é uma professora <br>";
    }
?>