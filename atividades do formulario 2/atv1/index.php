<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MS Oráculo da Idade</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1>MSCODE - Oráculo da Idade</h1>

        <?php
        $idade = 15;
        if ($idade < 12) {
            echo "Criança";
        } elseif ($idade < 18) {
            echo "Adolescente";
        } else {
          
            echo "Adulto";
        }

        ?>

    </main>

</body>

</html>