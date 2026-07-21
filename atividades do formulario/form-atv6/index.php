<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSCODE • Relatório Financeiro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <?php
       
        const NOME_AGENCIA = 'AGENCIA_STAR_MEDIA';
                                                        

        $marcas = ["Simonetti", "Samsung", "Red Bull"];

       
        $totalInfluenciadores = (int)($_GET['influenciadores'] ?? 4);
        $receitaTotal        = (float)($_GET['receita'] ?? 10000.00);
        $taxaPorcentagem     = (float)($_GET['taxa'] ?? 20); // Ex: 20%
        $taxaAgencia         = $taxaPorcentagem / 100;       // Ex: 0.20
        $caixasBrindes       = (int)($_GET['brindes'] ?? 25);
        $notaCampanha        = (int)($_GET['nota'] ?? 5);


        $valorAgencia = $receitaTotal * $taxaAgencia;
        $valorPorInfluenciador = ($receitaTotal - $valorAgencia) / $totalInfluenciadores;

        $brindesPorInfluenciador = intdiv($caixasBrindes, $totalInfluenciadores);
        $brindesSobraAgencia     = $caixasBrindes % $totalInfluenciadores;

      
        $potencialViral = $notaCampanha ** 2;



       
        echo "<h1>" . "Relatório da agência: " . NOME_AGENCIA . "</h1>";

       
        echo "<p style='color: #666; font-style: italic;'>";
        echo 'Lembrete: A $receitaTotal bruta não é o seu lucro final!';
        echo "</p>";

       
        $receitaFormatada  = number_format($receitaTotal, 2, ',', '.');
        $agenciaFormatada  = number_format($valorAgencia, 2, ',', '.');
        $criadorFormatado  = number_format($valorPorInfluenciador, 2, ',', '.');

        echo "<h2>Divisão Financeira</h2>";
        echo "Receita Total Bruta: <strong>R$ $receitaFormatada</strong><br>";
        echo "Valor retido pela agência ($taxaPorcentagem%): <strong>R$ $agenciaFormatada</strong><br>";
        echo "Cada um dos $totalInfluenciadores influenciadores receberá: <strong>R$ $criadorFormatado</strong><br><br>";

        echo "<h2>Distribuição de Brindes (Recebidos)</h2>";
        echo "Total de caixas recebidas: <strong>$caixasBrindes</strong><br>";
        echo "Cada influenciador recebe: <strong>$brindesPorInfluenciador caixas</strong><br>";
        echo "Caixas que sobraram para a agência: <strong>$brindesSobraAgencia caixas</strong><br><br>";

        echo "<h2>Desempenho da Campanha</h2>";
        echo "Nota da Campanha: <strong>$notaCampanha</strong><br>";
        echo "Potencial Viral (Nota²): <strong>$potencialViral pontos</strong><br><br>";


        echo "<h3>Inspeção dos Patrocinadores (\$marcas):</h3>";
        echo "<pre>";
        var_dump($marcas);
        echo "</pre>";
        ?>

        <br>

    </main>

</body>

</html>