<?php

    // Utilizar o foreach para percorrer um array é mais simples
    $matheus = [
        'nome' => 'Matheus',
        'idade' => 22,
        'profissao' => 'Programador'
    ];

    $daphne = [
        'nome' => 'daphne',
        'idade' => 21,
        'profissao' => 'Med. Veteriniaria'
    ];

    // $carac é a chave do arr assoc e $value o valor
    foreach($matheus as $carac => $value) {

        echo "$carac => $value <br>";

    }

    // Não precisa necessariamente passar chave e valor
    foreach($daphne as $value) {

        echo "$value <br>";
        
    }

?>