<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>

        <h1 class="mscode">MSCODE - Funções</h1>

        <div class="php">
            <?php
                echo "<h3>Painel de habilidades(skills). </h3>";

                $inputLinguagens = "PHP, HTML, CSS, JavaScript, MySQL";

                $listaSkills = explode(",", $inputLinguagens);

                echo "<pre>";
                 echo "<strong> Skills: </strong> <br>";
                 var_dump($listaSkills);
                echo "</pre>";

                $totalSkills = count($listaSkills);

                echo "<p>Total de Skills: $totalSkills</p>";

                if(in_array("PHP" , $listaSkills)) {
                    echo "<strong> Selo DEV Back-end </strong> <br>";
                }

                $textoFormatado = implode(" | " , $listaSkills);

                echo "Trilha do aluno: $textoFormatado";
                
            ?>
        </div>
    </main>
</body>
</html>