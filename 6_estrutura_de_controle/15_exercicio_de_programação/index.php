<?php

    function calcularDesconto($valor, $categoria) {

        if($categoria == "eletrônicos") {

            $descontoEletro = $valor * (10 / 100);
            $precoComDesc = $valor - $descontoEletro;
            
            echo "Valor: R$ $precoComDesc <br>";
        }
        elseif($categoria == "vestuários") {

            $descontoEletro = $valor * (20 / 100);
            $precoComDesc = $valor - $descontoEletro;
            
            echo "Valor: R$ $precoComDesc <br>";
        }
        elseif($categoria == "alimentos") {

            $descontoEletro = $valor * (5 / 100);
            $precoComDesc = $valor - $descontoEletro;
            
            echo "Valor: R$ $precoComDesc <br>";
        }
        else {
            echo "Não tem desconto para esta categoria <br>";
        }
    }

    calcularDesconto(100, "eletrônicos");
    calcularDesconto(1000, "vestuários");
    calcularDesconto(80, "alimentos");
    calcularDesconto(80, "carros");

?>