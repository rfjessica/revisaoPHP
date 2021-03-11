<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Funções Aritméticas em PHP</title>
    </head>
    <body><!--Aula 5 PHP Básico - Curso em Vídeo -->
        <?php 
            $v1 = $_GET["x"]; 
            $v2 = $_GET["y"];
        ?>      

        <h2><?php echo "Valores recebidos: $v1 e $v2"?></h2>

        <!--Exemplo de URL para valores personalizados: localhost/aula5/funcoesaritmeticas.php?x=4&y=-3 -->
        <?php echo "O valor absoluto de $v2 é ".abs($v2); //valor absoluto
        
        echo "<br/>O valor de $v1" ?><sup><?php echo "$v2"?></sup><?php echo " é ".pow($v1, $v2); //potenciação

        echo "<br/>A raiz quadrada de $v1 é ".sqrt($v1); 

        echo "<br/>O valor arredondado de $v2 é ".round($v2); //arredondamento
        /*função ceil: sempre arredonda para cima, independente do valor
        floor: arredonda para baixo */

        echo "<br/>A parte inteira de $v2 é ".intval($v2); 

        echo "<br/>O valor de $v1 em moeda é R$".number_format($v1, 2, ",", "."); //nessa ordem: valor, casas decimais, separador decimal, separador milhar
        ?>
    </body>
</html>