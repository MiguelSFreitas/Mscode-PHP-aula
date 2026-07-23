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

        <h1>Loops - FOR</h1> 
        <br>

        <h2>Analizador de Números </h2>
        <br>

        <div>
            <?php
               for($i = 1; $i <=1000; $i++) {
                if ($i % 2 == 0) {
                    echo "O numero $i é <strong>PAR</strong> <br>";
                }
                if ($i % 2 !=0){
                    echo "O numero $i é <strong>IMPAR</strong> <br>";
                }
               }

               echo "Analise concluida !"
            ?>

        </div>
    </main>
</body>
</html>