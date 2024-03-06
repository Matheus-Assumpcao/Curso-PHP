<?php

    $arrAssoc = [
        'nome' => 'Matheus', 
        'idade' => 21,
        'profissao' => 'Desenvolvedor',
        'salario' => 2245.50
    ];

    echo $arrAssoc['nome'];
    echo "<br>";
    echo $arrAssoc['idade'];
    echo "<br>";
    echo $arrAssoc['profissao'];
    echo "<br>";
    echo $arrAssoc['salario'];
    echo "<br>";

    if($arrAssoc['salario'] <= $arrAssoc['salario']) {
        echo "Estão te pagando errado";
    } else {
        echo "Salario pago corretamente";
    }

?>
