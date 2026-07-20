<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSCODE • Ficha de RPG</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1>MSCODE • Ficha de RPG</h1>

        <?php
        $guerreiro = [
            'nome'  => 'Thorin',
            'vida'  => 100,
            'forca' => 25
        ];

        $danoCritico = ($guerreiro['forca'] + $guerreiro['vida']) ** 2;

        echo "<h2>Guerreiro: " . $guerreiro['nome'] . "</h2>";
        echo "Vida: " . $guerreiro['vida'] . "<br>";
        echo "Força: " . $guerreiro['forca'] . "<br><br>";

        echo "<h3> Dano Crítico Calculado:</h3>";
        echo "Fórmula: (" . $guerreiro['forca'] . " + " . $guerreiro['vida'] . ")² <br>";
        echo "<strong>O Dano Crítico é de " . number_format($danoCritico, 0, ',', '.') . " pontos</strong>";
        ?>
    </main>

</body>

</html>