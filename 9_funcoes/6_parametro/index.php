<?php

    function velocidadeMaxima($vel) {

        if(is_int($vel)) {
            echo "O carro atinge uma velocidade máxima de $vel km/h <br>";
        } else {
            echo "Por favor, passe um número inteiro <br>";
        }
    }

    velocidadeMaxima(160);
    velocidadeMaxima(260);
    velocidadeMaxima(200);
    velocidadeMaxima(60);

    //Não pode, essa função espera um parametro
    //velocidadeMaxima();

    $velocidade = 180;
    velocidadeMaxima($velocidade);

    //PHP ignora parametro desnecessario
    velocidadeMaxima($velocidade, "teste");
    velocidadeMaxima(150.5);

    function descreverAnimal($nome, $raca) {

        echo "$nome é da raça $raca <br>";

    }

    descreverAnimal("Bruce", "Buldogue Francês");
    descreverAnimal("Nino", "Gato Gordo");
    descreverAnimal("Pupi", "Lhasa Apso");
    descreverAnimal("Roberta", "Gata Revoltada");
    descreverAnimal("Tuti", "Vira-Lata");
    descreverAnimal("Maria Flor", "Pitbull");
    descreverAnimal("Enzo", "Gato Faria Limer");
    descreverAnimal("Coragem", "Cachorro Revoltado");
    descreverAnimal("Fox", "Cachorro Come Cadeira");
    descreverAnimal("Farofa", "Gata do Possuida");

?>