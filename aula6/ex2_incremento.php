<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 2</title>
    </head>
    <body><!--Aula 6 PHP Básico - Curso em Vídeo: Mostre o ano anterior ao ano atual.  -->
        <?php 
            $atual = $_GET["aa"];
            echo "O ano atual é $atual e o ano anterior é ". --$atual; //pré decremento
        ?>      
    </body>
</html>