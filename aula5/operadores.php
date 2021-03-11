<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Operadores Aritméticos</title>
    </head>
    <body><!--Aula 5 PHP Básico - Curso em Vídeo -->
        <?php 
            //$n1 = 3; $n2 = 2;

            /*Exemplo de URL para valores personalizados: localhost/aula5/operadores.php?a=5&b=8 */
            $n1 = $_GET["a"]; $n2 = $_GET["b"]; //a e b são parâmetros, não variáveis

            $m = ($n1+$n2)/2;?>
            
            <h2><?php echo "Valores recebidos: $n1 e $n2"?></h2>

            <?php echo "A soma vale ".($n1+$n2);
            echo "<br/>A subtração vale ".($n1-$n2);
            echo "<br/>A multiplicação vale ".($n1*$n2);
            echo "<br/>A divisão vale ".($n1/$n2);
            echo "<br/>O módulo vale ".($n1%$n2);
            echo "<br/>A média vale $m";?>        
    </body>
</html>