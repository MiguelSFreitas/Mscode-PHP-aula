<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSCODE - Guardião do Servidor</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1>MSCODE - Guardião do Servidor</h1>

        <?php

        $perfil = 'admin';
        switch ($perfil) {
            case 'admin':
                echo "Acesso total liberado! Bem-vindo, Administrador.";
                break;

            case 'usuario':
                echo "Acesso  liberado! Bem-vindo";
                break;

            default:
                echo "Acesso negado";
                break;
        }

        ?>

    </main>

</body>

</html>