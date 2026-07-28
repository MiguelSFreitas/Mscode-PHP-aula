<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orçamento BV Bank</title>
</head>
<body>
    <h1>Orçamento do seu carro no BV BANK</h1> <br>
    <p>O banco BV permite parcelar veículos novos ou usados em até 60 vezes</p> <br><br>

    <form action="" method="get">
        <label for="nome">Seu Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo isset($_GET['nome']) ? $_GET['nome'] : ''; ?>" required><br><br>

        <label for="orcamento">Seu Orçamento:</label>
        <input type="number" id="orcamento" name="orcamento" value="<?php echo isset($_GET['orcamento']) ? $_GET['orcamento'] : ''; ?>" required><br><br>

        <label for="cupom">Cupom de Desconto:</label>
        <input type="text" id="cupom" name="cupom" value="<?php echo isset($_GET['cupom']) ? $_GET['cupom'] : ''; ?>"><br><br>

        <button type="submit">Calcular Orçamento</button>
    </form>

    <main>
        <?php
            if (isset($_GET['nome']) && isset($_GET['orcamento'])) {
                $nome = $_GET['nome'];
                $orcamento = (float)$_GET['orcamento'];
                $cupom = isset($_GET['cupom']) ? $_GET['cupom'] : '';
                $TAXA_CONVENIENCIA = 45.00;
                $total = 0;

                echo "<h2> Bem Vindo $nome. Vamos as compras </h2>";

                $catalogo = [
                    "GMW Haval h6" => ['nome'=>'GMW Haval h6', 'preco'=>299000, 'estoque'=>2],
                    "Chevrolet Tracker" => ['nome'=>'Chevrolet Tracker', 'preco'=>160790, 'estoque'=>3],
                    "Fiat Strada" => ['nome'=>'Fiat Strada', 'preco'=>136000, 'estoque'=>0],
                ];

                foreach ($catalogo as $departamento => $dadosProduto) {

                    if ($dadosProduto['estoque'] == 0) {
                        continue; 
                    }

                    echo "<h3>Departamento: $departamento</h3>";

                    if ($dadosProduto['estoque'] > 0 && $dadosProduto['preco'] <= $orcamento) {
                        $orcamento -= $dadosProduto['preco'];
                        $total += $dadosProduto['preco'];

                        echo "<p><strong>Compra realizada! Você comprou: " . $dadosProduto['nome'] . " por R$ " . number_format($dadosProduto['preco'], 2, ',', '.') . "</strong></p>";
                    } else {
                        echo "<p><em>Acima do seu orçamento de R$ " . number_format($orcamento, 2, ',', '.') . "</em></p>";
                    }

                    echo "<ul>";
                    
                    foreach ($dadosProduto as $propriedade => $valor) {
                        if ($propriedade == 'preco') {
                            $valor = "R$ " . number_format($valor, 2, ',', '.');
                        }
                        echo "<li><strong>" . ucfirst($propriedade) . ":</strong> $valor</li>";
                    }
                    
                    echo "</ul>";
                }

                if ($cupom === 'MEUCARRO10') {
                    $desconto = $total * 0.10;
                    $total -= $desconto;
                    echo "<p><strong>Cupom MEUCARRO10 aplicado com sucesso! Desconto de R$ " . number_format($desconto, 2, ',', '.') . ". Total atualizado: R$ " . number_format($total, 2, ',', '.') . "</strong></p>";
                } else {
                    echo "<p>Cupom inválido ou não informado. Total da conta: R$ " . number_format($total, 2, ',', '.') . "</p>";
                }

                $taxa = ($total > 2000) ? 0 : $TAXA_CONVENIENCIA;
                $totalPagar = $total + $taxa;
                $troco = $orcamento;

                echo "<p><strong>Taxa de Conveniência:</strong> R$ " . number_format($taxa, 2, ',', '.') . "</p>";
                echo "<p><strong>Total a Pagar:</strong> R$ " . number_format($totalPagar, 2, ',', '.') . "</p>";
                echo "<p><strong>Troco / Orçamento Restante:</strong> R$ " . number_format($troco, 2, ',', '.') . "</p>";

                $executou = false;
                do {
                    echo "<p>Processando. . .</p>";
                    $executou = true;
                } while (!$executou);

                echo "<p><strong>Pagamento Autorizado!</strong></p>";
            }

            $coins = 0;
            while($coins <= $total) {
                $coins = $coins + 50;
            }

            echo ""
        ?>
    </main>
</body>
</html>