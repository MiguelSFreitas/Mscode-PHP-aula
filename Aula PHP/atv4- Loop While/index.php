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
        <h1> Instalando o Jogo - MSCODE</h1> <br>

        <?php 
           $progresso = 0;
              while($progresso < 100){ 
                $progresso += 20;

                echo "<p> Baixando arquivos . . . . $progresso% concluído </p>";

            }
    
            echo "<br>";
            echo "<strong> Instalação Concluída ! </strong>";

        ?>
    </main>
</body>
</html>