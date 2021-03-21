<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 2</title>
    </head>
    <body>
        <div>
          <?php 
            $vl = isset($_GET["num"])?$_GET["num"]:0;

            $prod = 0;

            for($i=1; $i<=10; $i++){
                $prod = $vl*$i;
                echo "$vl x $i = $prod<br/>";
            }

            echo "<br/><a href='javascript:history.go(-1)'><button>Voltar</button></a>";
          ?>
        </div>
    </body>
</html>