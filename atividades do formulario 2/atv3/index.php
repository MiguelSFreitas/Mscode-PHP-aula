Aqui está o código do lançamento espacial, seguindo a mesma estrutura do seu HTML:

PHP
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSCODE • Lançamento Espacial</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1>Lançamento Espacial MS CODE-X</h1>

        <?php
        $contador = 10;

        while ($contador > 0) {
            echo $contador . "<br>";
            $contador--; 
        }

        echo "<strong>DECOLAR!</strong>";

        ?>

    </main>

</body>

</html>