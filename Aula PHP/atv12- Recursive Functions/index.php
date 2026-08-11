<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Recursivas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>

        <h1 class="mscode">MSCODE - Funções Recursivas</h1>

        <div class="php">

            <?php
                echo "<h3>Contagem Regressiva: </h3>";

                function contagemRegressiva($numero) {
                    if ($numero <= 0) {
                        return;
                        }

                    echo "Contagem: $numero... <br>";

                    contagemRegressiva($numero - 1);

                }

                contagemRegressiva(5);

                PHP_EOL;
    
                function contagemCrescente( int $numero) {
                  if ($numero <= 0) {
                    echo "<strong>Decolar!</strong>";

                    return;
                    
                    }

                    contagemCrescente($numero - 1);
                    echo "Contagem: $numero <br>";
            
                }

                contagemCrescente(10);


            ?>
        </div>
    </main>
</body>
</html>