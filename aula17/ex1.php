<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 1</title>
    </head>
    <body>
        <div>
            <?php 
                $nome = "Jessica Rangel";
                echo "Seu nome é ".strtolower($nome).".<br/>";
                echo "Seu nome é ".strtoupper($nome).".<br/>";
                echo "Seu nome ao contrário: ".strrev($nome).".<br/>";

                $nome2 = "rio de janeiro";
                echo "O que eu escrevi: ".ucfirst($nome2).".<br/>";
                echo "O que eu escrevi: ".ucwords($nome2).".";
            ?>
        </div>
    </body>
</html>