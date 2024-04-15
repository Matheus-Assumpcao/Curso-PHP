<?php

    function apresentacao($nome, $idade){

        if(is_int($idade)) {
            echo "Olá, meu nome é $nome e tenho $idade anos <br>";
        }
        else {
            echo "Idade precisa ser inteiro <br>";
        }
    }

    apresentacao("Matheus", 22);
    apresentacao("Matheus", 22.5);
    apresentacao("Daphne", 21);

?>