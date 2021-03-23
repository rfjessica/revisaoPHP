<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 1</title>
    </head>
    <body>
        <div>
            <?php //PASSAGEM DE PARÂMETROS 
                       
                function teste($x) { //POR VALOR
                    $x += 2;
                    echo "<p>O valor de x é $x.<p/>";
                }

                $a = 3;
                teste($a);
                echo "<p>O valor de a é $a.<br/>";

                function teste2(&$x) { //POR REFERÊNCIA: qualquer alteração no valor de uma variável interfere diretamente no valor de outra.
                    $x += 2;
                    echo "<p>O valor de x é $x.<p/>";
                }

                $a = 3;
                teste2($a);
                echo "<p>O valor de a é $a.<br/>";
            ?>
        </div>
    </body>
</html>