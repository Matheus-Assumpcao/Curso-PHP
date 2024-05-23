<?php

    $provas = [
        'Matheus' => 5.5,
        'Daphne' => 10,
        'Nino' => 7.5,
        'Bruce' => 6
    ];

    arsort($provas);

?>

<h1>Notas:</h1>
<ol>
    <?php foreach($provas as $pessoa => $notas): ?>
        <li><?= $pessoa ?> --  Nota: <?= $notas ?></li>
    <?php endforeach; ?>
</ol>

