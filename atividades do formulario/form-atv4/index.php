<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSCODE • Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1>MSCODE • Cálculo de Desconto</h1>

        <?php
        $descontoPorcentagem = 10;


        $precoOriginal = $_GET['preco'] ?? 200;
        $precoOriginal = (float)$precoOriginal;
        $valorDesconto = $precoOriginal * ($descontoPorcentagem / 100);
        $valorFinal = $precoOriginal - $valorDesconto;


        echo "<h2>Resultado do Desconto</h2>";

        echo "Preço original: R$ " . number_format($precoOriginal, 2, ',', '.') . "<br>";
        echo "Desconto (10%): R$ " . number_format($valorDesconto, 2, ',', '.') . "<br>";
        echo "<strong>Valor Final: R$ " . number_format($valorFinal, 2, ',', '.') . "</strong><br><br>";

        echo "<h3>Inspeção da Variável (\$valorFinal):</h3>";
        echo "<pre>";
        var_dump($valorFinal);
        echo "</pre>";
        ?>

        <br>
        <a href="formulario.html">form</a>
    </main>

</body>

</html>