<?php

    $teste = "asd"; 
    echo "$teste global 1 <br>";

    if(5 > 2) {

        $teste = "dsa";

        echo "$teste if <br>";

    }

    echo "$teste global 2 <br>";

    function funcao() {

        $teste = "teste";

        echo "$teste local <br>";

    }

    funcao();

    function testandoGlobal() {

        global $teste; // Para acessar var globais
        $teste = 2; // alterando no local a alteração referencia para a global

        echo "$teste global função <br>";

    }

    testandoGlobal();

    echo "$teste global 3 <br>";

?>