<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 2</title>
    </head>
    <body>
        <div>
            <?php                        
               $frase = "Estou aprendendo PHP";
               $pos = strpos($frase, "PHP");

               echo "$frase<br/>A string foi encontrada na posição $pos<br/>";

               $ps = stripos($frase, "php");
               print("Encontrado na posição $ps<br/>");

               $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP<br/>";
               echo $frase;
               $cont = substr_count($frase, "PHP");
               print("PHP encontrado $cont vezes");
            ?>
        </div>
    </body>
</html>