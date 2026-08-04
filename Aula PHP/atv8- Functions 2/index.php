<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>

        <div>
            <?php
                printWellcome ();

                function printWellcome (): void {
                    echo "<h2> Wellcome to MS CODE system</h2><br>";
                    echo "Active server, ready for use. <hr>";
                }

                function auraFarm(string $name, int $level): string {
                    return "Hello <strong> $name </strong>! Your aura level is: <mark> <em>$level</em> </mark>";

                }

                $name = (string) 'Miguel';
                $level = (int) '100';
                $auraLevel = auraFarm($name, $level);

                echo "<p> <strong> $auraLevel </strong> </p>"
            ?>

        </div>

        
        
    </main>
</body>
</html>