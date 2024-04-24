<?php

    function alteraDados($nome, $idade) {

        $nome = "Sr. $nome";
        $idade = "$idade anos";

        return [$nome, $idade];
    }

    $dados = alteraDados("Matheus", 22);

    echo "Olá $dados[0], você tem $dados[1], correto?";

?>