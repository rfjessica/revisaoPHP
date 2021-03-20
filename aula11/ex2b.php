<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 2</title>
    </head>
    <body>
        <div>       
            <?php 
                $i = 1;
                while($i <= 5){
                    $v = "num".$i;
                    $url = "v".$i;
                    $$v = isset($_GET[$url])?$_GET[$url]:0;
                    $i++;
                }

                $i = 1;
                while($i <= 5){
                    $v = "num".$i;
                    echo "Valor $i : " . $$v . "<br/><br/>";
                    $i++;
                }

                echo "<a href='javascript:history.go(-1)'><button>Voltar</button></a>";
            ?>
        </div>
    </body>
</html>