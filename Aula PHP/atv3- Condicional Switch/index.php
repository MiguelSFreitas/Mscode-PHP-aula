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
        <h2>Minecraft</h2>
    <?php
        $opcaoEscolhida= (int) '1';

        switch($opcaoEscolhida){
            case 1: 
                echo"Iniciando um novo jogo. . . <br>";
                break;
            case 2:
                echo "<p>&#9881 Abrindoo o Painel de configuração . . . </p>";
                break;
            case 3:
                echo "<p> Carregando a tela de conquistas . . . </p>";
                break;
            default:
            echo "<p> Opção invalida</p>";
        }
    ?>

    </main>
</body>
</html>