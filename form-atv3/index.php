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
        <h1>MSCODE • Conversor de Moedas</h1>

        <?php
        $cotacao = 5.40;
        $reais = $_GET['reais'] ?? 0;
        $reais = (float)$reais;

      
        $dolares = $reais / $cotacao;

        $reaisFormatado = number_format($reais, 2, ',', '.');
        $dolaresFormatado = number_format($dolares, 2, '.', ',');

          echo "<h2>R$ $reaisFormatado valem US$ $dolaresFormatado</h2>";
        ?>

        <br>
        <a href="formulario.html">← form</a>
    </main>

</body>

</html>