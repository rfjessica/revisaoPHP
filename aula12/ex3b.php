<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 3</title>
    </head>
    <body>
        <div>
            <?php 
                $n = isset($_GET["num"])?$_GET["num"]:0;

                $i=0; $prod = 0;
                
                do{
                    $prod = $n*$i;
                    echo "$n x $i = $prod<br/>";
                    $i+=1;
                }while($i<=10);

                echo "<br/><a href='javascript:history.go(-1)'><button>Voltar</button></a>";
            ?>
        </div>
    </body>
</html>