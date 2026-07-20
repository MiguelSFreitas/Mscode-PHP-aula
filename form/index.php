<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSCODE - Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1>MSCODE • Calculadora de Dias</h1>

        <?php
        
        const DIAS_ANO = 365;

        $idade = $_GET['idade'] ?? 0;
        $idade = (int)$idade;
        $diasVividos = $idade * DIAS_ANO;

         echo "Você já viveu aproximadamente <strong>" . number_format($diasVividos, 0, ',', '.') . " dias</strong>!<br>";
        ?>

        <br>
        <a href="formulario.html">form</a>
    </main>

</body>

</html>