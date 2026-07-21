<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <h1>Conversao de tipos</h1>

    <?php
    
     $idadeDigitada = '20';
     $moeda = '100.20';

     $idade = (int)$idadeDigitada;
     $valor = (float)$moeda;
     $idadeString = (string)$idade;
     $texto= (int)'so um texto';

     var_dump($idadeDigitada);
     echo "<br>";
     var_dump($idade);
     echo "<br>";
     var_dump($moeda);
     echo "<br>";
     var_dump($valor);
     echo "<br>";
     var_dump($idadeString);
     echo "<br>";
     var_dump($texto);

     echo "<h1>OI</h1>";

    ?>
</body>
</html>