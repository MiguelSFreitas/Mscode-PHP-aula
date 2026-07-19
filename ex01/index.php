<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <h1>MSCODE • Aula 02</h1>

        <?php
        // Constante
        const NOME_EMPRESA = 'PIZZARIA';

        // Variáveis
        $valorPizza = 90.00;
        $valorRefrigerante = 15.00;
        $totalAmigos = 4;
        $totalFatias = 10;

        $contaTotal = ($valorPizza + $valorRefrigerante) * 1.10;
        $valorPorAmigo = $contaTotal / $totalAmigos;
        $fatiasPorAmigo = intdiv($totalFatias, $totalAmigos);
        $fatiasQueSobraram = $totalFatias % $totalAmigos;

        
        echo "<h2>" . NOME_EMPRESA . "</h2>";

        echo "O valor total da conta é: R$ " . number_format($contaTotal, 2, ',', '.') . "<br>";

        echo "O valor que cada amigo deve pagar é: R$ " . number_format($valorPorAmigo, 2, ',', '.') . "<br>";

        echo "Cada amigo vai comer $fatiasPorAmigo fatias de pizza.<br>";

        echo "Sobraram $fatiasQueSobraram fatias de pizza.";
        ?>
    </main>
</body>
</html>