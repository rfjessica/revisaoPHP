<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 4</title>
    </head>
    <body>
        <div>
            <?php                        
               $txt = str_repeat("Php", 5);
               print("O texto gerado foi $txt<br/>");

               print(str_repeat("-", 5));

               $frase = "<br/>Gosto de estudar Matemática!!!";
               print($frase);
               $novaFrase = str_replace("Matemática", "PHP", $frase);
               print($novaFrase);
            ?>
        </div>
    </body>
</html>