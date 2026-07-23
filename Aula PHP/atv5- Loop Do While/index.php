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

        <h1>Loops - DO WHILE</h1> 
        <br>

        <h2>Tentativa de conexção com o servidor</h2>
        <br>

        <div>
            <?php
                $tentativa = 1;

                do{
                    echo "<p> Tentando conectar ... (tentativa $tentativa)</p>";
                    $tentativa++;
                } while ($tentativa <= 30000);

                echo"<strong> Conectado com sucesso ! </strong>";
            ?>

        </div>
    </main>
</body>
</html>