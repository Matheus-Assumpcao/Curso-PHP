<?php

function verificarCategoria($categoria) {

    if($categoria === "eletrônicos") {
        
        echo "Essa categoria é de $categoria <br>";
    }
    elseif($categoria === "vestuários") {

        echo "Essa categoria é de $categoria <br>";
    }
    elseif($categoria === "alimentos") {

        echo "Essa categoria é de $categoria <br>";
    }
    else {
        echo "Categoria desconhecida <br>";
    }
}

verificarCategoria("eletrônicos");
verificarCategoria("vestuários");
verificarCategoria("alimentos");
verificarCategoria("carros");

?>