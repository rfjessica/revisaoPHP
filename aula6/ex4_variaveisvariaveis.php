<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 4</title>
    </head>
    <body><!--Aula 6 PHP Básico - Curso em Vídeo: Praticar o uso de variáveis de variáveis. -->
        <?php 
          $x = "abc";
          $$x = "def";

          /*Com essas linhas, teremos uma variável $x com o conteúdo “abc” 
          e a linha de baixo vai criar uma variável $abc com o conteúdo “def”.*/

          echo "Conteúdo da variável X: $x";
          echo "<br/>COnteúdo da variável ABC: $abc";
        ?>      
    </body>
</html>
