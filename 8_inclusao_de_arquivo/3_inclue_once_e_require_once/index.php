<?php

    //Arquivos que não existem
    // include_once 'teste.php';
    // require 'teste.php';

    //Arquivos que existem
    //include_once e require_once só permitem chamar o conteudo uma vez, independente qual esta usando
    include_once 'teste2.php';
    include_once 'teste2.php';

    //include e require permite chamar quantas vezes quiser
    include 'teste2.php';
    include 'teste2.php';

    require_once 'teste2.php';
    require_once 'teste2.php';

    require 'teste3.php';
    require 'teste3.php';

?>

<p>Testando Código</p>