<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 1</title>
    </head>
    <body><!--Aula 6 PHP Básico - Curso em Vídeo: Calcule 10% do valor de aumento e desconto para o preço -->
        <?php 
            $preco = $_GET["p"]; 
            echo "O preço do produto é R$ " . number_format($preco, 2);

            $preco += ($preco*0.1); //equivale a $preco = $preco+($preco*0.1);
            echo "<br/>Novo preço, com 10% de aumento: R$ " . number_format($preco, 2);

            $preco -= ($preco*0.1); //equivale a $preco = $preco-($preco*0.1);
            echo "<br/>Novo preço, com 10% de desconto: R$ " . number_format($preco, 2);
        ?>      
    </body>
</html>
