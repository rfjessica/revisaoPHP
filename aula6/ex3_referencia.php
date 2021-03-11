<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 3</title>
    </head>
    <body><!--Aula 6 PHP Básico - Curso em Vídeo: Praticar o uso de variáveis referenciadas.  -->
        <?php 
           /* $a = 3; 
            $b = $a; 
            $b += 5; 
            echo "A variável A vale $a";
            echo "<br/>A variável B vale $b";*/

            $a = 3; 
            $b = &$a; 
            $b += 5; 
            echo "A variável A vale $a";
            echo "<br/>A variável B vale $b";
        ?>      
    </body>
</html>