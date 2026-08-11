<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Recursivas</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <main>

        <h1 class="mscode">MSCODE - TRY CATCH</h1>
        <hr>


        <div class="php">

            <?php
               
                echo "<h3>Finalização de Compra - MS CODE store</h3>";
                
                function processarPedido($produto, $preco, $quantidadeDesejada, $estoqueAtual, $cupom) {
                    if (empty(trim($produto))) {
                        throw new Exception("O nome do produto não pode ser enviado em branco.");
                    }

                    if ($quantidadeDesejada > $estoqueAtual) {
                        throw new Exception("Estoque insuficiente para o item '$produto'! Você pediu $quantidadeDesejada unidade(s), mas só temos $estoqueAtual em estoque.");
                    }

                    if (!empty($cupom) && trim(strtoupper($cupom)) !== 'MSCODE10') {
                        throw new Exception("O cupom de desconto '$cupom' é inválido ou já expirou.");
                    }
                    
                    $total = $preco * $quantidadeDesejada;
                    
                    if(trim(strtoupper($cupom)) === 'MSCODE10') {
                        $total *= 0.9;
                        
                        echo "cupom 'MSCODE10' aplicado! Você ganhou 10% de desconto! <br>";
                    }

                    return $total;
                }

                try {
                    $item = 'Teclado';
                    $precounitario = 250.00;
                    $quantidade = 2;
                    $estoqueDisponivel = 5;
                    $cupomCliente = 'MSCODE10';

                    echo "<p> Processando compra $quantidade unidade(s) de '$item'...</p>";

                    $totalPagar = processarPedido($item, $precounitario, $quantidade, $estoqueDisponivel, $cupomCliente);
                    
                    echo "<strong>Sucesso!</strong> Pedido finalizado. Total: R$" . number_format($totalPagar, 2, ',', '.') . "<br>";
                } catch (Exception $e) {
                    echo "<strong>Erro:</strong> " . $e->getMessage() . "<br>";
                }
            
            ?>
        </div>
    </main>
</body>
</html>