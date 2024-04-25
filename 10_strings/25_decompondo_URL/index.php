<?php

    $url = "https://liquidei.com.br";

    $decomporUrl = parse_url($url);

    print_r($decomporUrl);
    echo "<br>";

    echo $decomporUrl["host"];
    echo "<br>";

    $url2 = "http://www.horadecodar.com.br/?busca=php";

    $decomporUrl2 = parse_url($url2);

    print_r($decomporUrl2);
    echo "<br>";

    echo $decomporUrl2["host"];
    echo "<br>";

    $url3 = "http://www.horadecodar.com.br/usuarios/matheusassumpa?id=12&nome=matheus";

    $decomporUrl3 = parse_url($url3);

    print_r($decomporUrl3);
    echo "<br>";

    echo $decomporUrl3["host"];
    echo "<br>";
?>