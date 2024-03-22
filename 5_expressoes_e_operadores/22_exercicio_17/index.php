<?php

    $nome = "João";
    $num1 = 1;
    $num2 = 2;
    $num3 = 3;
    $num4 = 5;
    $num5 = 15;
    $teste = "teste";

    if($num5 > $num4 && $nome === $nome) {
        echo "Entrou no if 1 <br>";
    }

    if("teste" > 5 && 1) {
        echo "Entrou no if 2 <br>";
    }

    if($num2 === $num3 && $num4 >= $num3) {
        echo "Entrou no if 3 <br>";
    }

    // Quando você compara uma string com um número em PHP, ele compara os valores ASCII dos caracteres da string. No caso de "teste" e 5, ele compara os valores ASCII do primeiro caractere de "teste" com o número 5.
    // O valor ASCII de 't' é 116, e o valor ASCII de '5' é 53. Como 116 é maior que 53, "teste" > 5 é avaliado como verdadeiro (true).
    // Além disso, a expressão 1 é considerada verdadeira em PHP.
    // Portanto, a condição do segundo if se torna true && true, que é true. Assim, o código dentro do segundo if é executado e você vê a mensagem "Entrou no if 2" sendo exibida.

?>