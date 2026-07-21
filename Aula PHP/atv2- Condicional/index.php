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
        <h1>MSCODE - Condicional</h1>
        <h2>Sitema de Catraca</h2>
    <?php

        $nomeDigitado = "Miguel";
        $idadeDigitada= '18';

        $nome = (string) $nomeDigitado;
        $idade = (int) $idadeDigitada;
        

        $temIngresso = true;
        $amigoDoDono = false;
        $camarote = true;

        if($idade >= 18 && ($temIngresso || $amigoDoDono)) {
            $status = 'Acesso VIP liberado!';
            $corPulseira = 'Dourada';
            $catracaLiberada = true;
        }
        else if ($idade >= 18 && ($temIngresso === false)) {
            $status = 'Barrado Na Porta';
            $corPulseira = 'Nenhuma';
            $catracaLiberada = false;
        }
        else {
            $status = 'acesso negado';
            $corPulseira = 'Erro';
            $catracaLiberada = false;
        }
        echo "<p>Nome: $nome <br> </p>";
        echo "<p>Cor da Pulseira: $corPulseira <br> </p>";
        echo "<h3>STATUS: $status <br> </h3>";

        if($status === 'acesso negado') {
            echo '<p>Volte para a casa e vá jogar videogame!';
        }
    ?>
    </main>
</body>
</html>