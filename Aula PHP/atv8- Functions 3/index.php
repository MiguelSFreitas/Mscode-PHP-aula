<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div>
            <?php
                function calcularDesconto(
                    float $precoOriginal,
                    float $porcentagemDesconto
                ) {
                    $valorDesconto = $precoOriginal * ($porcentagemDesconto / 100);
                    $precoFinal = $precoOriginal - $valorDesconto;

                    return $precoFinal;
                }

                function formatarMoeda(float $valor) {
                    return "R$ " . number_format($valor, 2, ",", ".");
                }

                $precoItem = 250.00;
                $cupom = 20; 

                $valorComDesconto = calcularDesconto($precoItem, $cupom);

                $precoOriginalFormatado = formatarMoeda($precoItem);
                $precoComDescontoFormatado = formatarMoeda($valorComDesconto);

                echo "<p>Preço do Produto: " . $precoOriginalFormatado . "</p>";
                echo "<p>Desconto do Cupom: " . $cupom . "%</p>";
                echo "<p>Preço Final com Desconto: " . $precoComDescontoFormatado . "</p>";
            ?>
        </div>
    </main>
</body>
</html>