<?php

    $pessoa = [
        'nome' => 'Matheus',
        'idade' => 21,
        'profissao' => 'Desenvolvedor'
    ];

    $idade = $pessoa['idade'];
    $nome = $pessoa['nome'];

    if($idade < 18) {
        echo "PROIBIDO ENTRADA DE MENORES <br>";
    } else{
        echo "ENTRADA LIBERADA, USUARIO $nome TEM $idade ANOS <br>";
    }

    //     OU

    $maioridade = 18;

    if($pessoa['idade'] >= $maioridade) {
        echo "A pessoa é maior de idade";
    }

?>