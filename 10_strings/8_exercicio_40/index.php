<?php

// Maneira que eu fiz
// $str = "O rato roeu a roupa do rei de Roma";

// for($i = 0; $i < strlen($str); $i++) {

//     if($str[$i] == "a") {
//         echo strlen($str[$i]);
//     }
//     echo "$str[$i] <br>";
// }

// Maneira do Professor
$frase = "O rato roeu a roupa do Rei de Roma";
$contadorDeAs = 0;

for($i = 0; $i <strlen($frase); $i++) {


    if($frase[$i] === "a") {
        $contadorDeAs++;
    }

}

echo "O numero de A's na frase é de: $contadorDeAs <br>";
?>