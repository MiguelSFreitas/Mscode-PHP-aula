<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSCODE - Inspetor de Almoxarifado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1>Inspetor de Almoxarifado</h1>

        <?php

        $estoque = [
            'Teclado Mecânico' => 15,
            'Mouse Gamer'     => 0,
            'Monitor 144Hz'   => 8,
            'Cabo HDMI'       => 0
        ];

        foreach ($estoque as $produto => $quantidade) {

            if ($quantidade == 0) {
                echo "Produto: <strong>{$produto}</strong> - <span style='color: red;'>ESGOTADO!</span><br>";
            } else {
                echo "Produto: <strong>{$produto}</strong> - Em Estoque ({$quantidade} unidades)<br>";
            }

        }

        ?>

    </main>

</body>

</html>