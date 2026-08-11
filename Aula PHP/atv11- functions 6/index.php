<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roleta de Cashback e Recibo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>

        <h1 class="mscode">MSCODE - Funções</h1>

        <div class="php">
            <?php
                echo "<h3>Roleta de Cashback e Recibo. </h3>";

                $dataHoje = date("d/m/y H : i : s");

                echo "<p>Data e hora da consulta: <strong>$dataHoje</strong></p>";

                $descontoSorteado = rand(5, 25);

                $valorCompra = 450.00;

                $valorDesconto = $valorCompra * ($descontoSorteado / 100);
                
                $valorFinal = $valorCompra - $valorDesconto;

                $compraFormatado = formatarMoeda($valorCompra);

                $descontoFinal = 1;
            ?>
        </div>
    </main>
</body>
</html>