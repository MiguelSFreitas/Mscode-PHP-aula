<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Loops - FOREACH</h1>
        <h2>A busca no catálogo - MSCODE</h2>

        <div>
            <?php
                $catalogo = [
                    "Eletronicos" => ['Mouse', 'Teclado', 'Monitor'],
                    "Moveis" => ['Mesa', 'Cadeira', 'Sofa'],
                    "Roupas" => ['Camiseta', 'Calça', 'Jaqueta'],
                ];

                $produtoBuscado = 'Cadeira';

                foreach ($catalogo as $categoria => $produtos) {
                    
                    echo "<h3>BUscando na categoria: $categoria</h3>";

                    foreach ($produtos as $protudos) {
                        echo "Chegando item: $produtos <br>";

                        if ($produtos === $produtoBuscado) {
                            echo "<p><strong> \u{1F3AF} Produto '$produtos' encontrado";

                            return;

                        }
                    }
                }
            ?>
        </div>
    </main>
    
</body>
</html>