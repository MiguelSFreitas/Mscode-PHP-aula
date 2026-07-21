<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSCODE • Aula 02</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1>MSCODE • Aula 02</h1>

        <?php
        
        const NOME_EMPRESA = 'GWM';
        $equipamentos = [
            'Haval H6',
            'Tank 300',
            'Poer P30'
        ];

        echo "A " . NOME_EMPRESA . " fornece: " . $equipamentos[0] . "<br>";
        echo "A " . NOME_EMPRESA . " fornece: " . $equipamentos[1] . "<br>";
        echo "A " . NOME_EMPRESA . " fornece: " . $equipamentos[2] . "<br>";

        ?>

    </main>

</body>

</html>