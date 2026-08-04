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

        <h1 class="mscode">MSCODE - funções</h1>

        <div>
            <?php
                echo "<h3>Validação de Cadastro de Alunos </h3>";

                $nome = "Miguel Freitas";

                $email = "miguel.soltofreitas1@outlook.com";

                $cpf = "156.704.277-50";

                $emailTratado = "";
                $nomeTratado = "";

                if (isset($email) && !empty($nome)) {
                  $emailTratado = trim($email);
                }

                 if (isset($nome) && !empty($nome)) {
                  $nomeTratado = trim($nome);
                }

                if (!str_contains($emailTratado,'@')) {
                    echo " ⚠️ <em> <strong>SMTP 501 5.1.3</strong> Email inválido! Precisa conter '@' </em> <br>";
                }

                if (strlen($cpf) < 11) {
                    echo "⚠️ <em> <strong>CPF inválido!</strong>  Precisa ter no mínimo 11 caracteres.</em> <br>";
                }

                $emailFormatado = strtolower($emailTratado);
                $nomeFormatado = strtoupper($nomeTratado);

                $cpfApenasNumeros = str_replace(['.', '-'], '', $cpf);

                $cpfMascarado = substr($cpfApenasNumeros, 0, 3) . '.***.***-**';

                echo "<h4><strong>Aluno Cadastrado:</strong></h4>";
                echo "Nome: $nomeFormatado<br>";
                echo "Email: $emailFormatado<br>";
                echo "CPF Protegido: $cpfMascarado<br>";
            ?>
        </div>
    </main>
</body>
</html>