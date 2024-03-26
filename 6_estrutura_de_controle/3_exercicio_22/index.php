<?php

    $usuario1 = 17;
    $usuario2 = 26;
    $usuario3 = 18;

    $maioridade = 18;

    $msg_sucesso = "Você é maior de idade! <br>";
    $msg_erro = "Você é menor de idade <br>";

    if($usuario1 >= $maioridade) {
        echo "Idade do usuario: $usuario1 <br>";
        echo "Analisando... <br>";
        echo $msg_sucesso;
    }
    else {
        echo $msg_erro;
    }

    if($usuario2 >= $maioridade) {
        echo "Idade do usuario: $usuario2 <br>";
        echo "Analisando... <br>";
        echo $msg_sucesso;
    }
    else {
        echo $msg_erro;
    }

    if($usuario3 >= $maioridade) {
        echo "Idade do usuario: $usuario3 <br>";
        echo "Analisando... <br>";
        echo $msg_sucesso;
    }
    else {
        echo $msg_erro;
    }

?>