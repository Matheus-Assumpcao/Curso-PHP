<?php

    $arr = [
        'nome' => 'Matheus',
        'idade' => 22
    ];

    if(array_key_exists("nome", $arr)) {

        echo "Chave existe";
        echo "<br>";

    } else{

        echo "Chave não existe";
        echo "<br>";

    }

    if(array_key_exists("nacionalidade", $arr)) {

        echo "Chave existe";
        echo "<br>";

    } else{

        echo "Chave não existe";
        echo "<br>";

    }

    if(isset($arr['nome'])) {

        echo 'Chave existe ISSET';

    } else {

        echo 'Chave não existe ISSET';

    }

?>