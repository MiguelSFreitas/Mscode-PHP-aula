<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Recursivas</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <main>

        <h1 class="mscode">MSCODE - Computer Simulator</h1>
        <hr>

        <br>


        <div class="php">

            <?php
                //arrays
                $meuComputador = [
                    "Documentos" =>[
                        "MSCODE" =>[
                            "aula1.txt",
                            "aula2.txt",
                        ],
                        "Pessoal" => [
                            "curriculo.pdf",
                            "foto_perfil.png"
                        ],
                        "VScode" => [
                            "contador.py",
                            "index.html"
                        ]
                    ],

                    "config.ini"
                ];

                function explorarPastas(array $itens){
                    echo "<ul>";

                    foreach($itens as $chave => $conteudo) {
                        if(is_array($conteudo)) {
                            echo "<li> <strong> Pasta: $chave </strong>";

                            explorarPastas($conteudo);

                            echo "</li>";

                        } else {
                            echo "<li> Arquivos: $conteudo </li>";

                        }

                    }

                    echo "</ul>";
                
                }

                echo "<h3>--- Explorador de Arquivos ---</h3>";

                explorarPastas($meuComputador); //chama a função

            ?>
        </div>
    </main>
</body>
</html>