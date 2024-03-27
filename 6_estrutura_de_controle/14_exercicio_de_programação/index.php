<?php

    function verificarAcesso($a, $b){
    
        if($a >= 18){
            if($b >= 2006){
                echo("Acesso autorizado");
            }
            else{
                echo("Acesso negado. Autorização necessária");
            }
        }
        else {
            echo("Acesso Negado. Idade mínima permitida requerida: 18 anos");
        }
    }

    verificarAcesso(18, 2006);


?>