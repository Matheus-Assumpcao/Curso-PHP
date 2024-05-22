<?php

    $usuarios = [
        'Matheus' => 22,
        'Daphne' => 21,
        'Lucas' => 15,
        'Luciana' => 44,
        'Fabio' => 48,
        'Bruce' => 3
    ];

?>

<table border=1>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($usuarios as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
    <?php endforeach; ?>
</table>