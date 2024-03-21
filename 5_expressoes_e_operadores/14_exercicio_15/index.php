<?php

    $nomeCadastrado = "Matheus";
    $nomeInput = "Mateus";

    if($nomeCadastrado == $nomeInput) {
        echo "Nomes validados, liberar acesso! <br>";
    }
    else {
        echo "Nomes distintos, bloquear acesso! <br>";
    }

    $senhaCadastrada = "Bruce2024";
    $senhaInput = "Bruce2024";

    if($senhaCadastrada == $senhaInput) {
        echo "Senha correta! <br>";
    }
    else {
        echo "Senhas distintos, tente novamente! <br>";
    }

?>