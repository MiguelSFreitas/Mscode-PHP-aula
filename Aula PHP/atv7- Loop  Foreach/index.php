<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>

        <h1>Loops - FOREACH</h1> 
        <br>

        <h2>Seu carrinho de compras -  </h2>
        <br>

        <div>
            <?php
                $carrinho = [
                    "Notebook" => 4500.00,
                    "Mouse redondo" => 120.00,
                    "Teclado" => 350.00,
                    "Monitor" => 900.00,
                   
                ];

               $totalcompra = 0;

               echo "<h3> Itens adicionados</h3>";

               echo "<ul>";

               foreach ($carrinho as $produto => $preco) {
                    echo "<li>O produto $produto custa R$ $preco</li>";
                    $totalcompra = $totalcompra + $preco;
                 }
                 
                 echo "<br><li><strong>Total a pagar: R$ $totalcompra</strong></li>";
            ?>

        </div>
    </main>
</body>
</html>