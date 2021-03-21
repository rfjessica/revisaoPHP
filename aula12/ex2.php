<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 2</title>
    </head>
    <body>
        <div>
            <?php 
                $v = isset($_GET["val"])?$_GET["val"]:0;
                echo "<h1>Calculando o valor de $v</h1>";

                $c = $v; $fat = 1;
                do{
                    $fat = $fat*$c;
                    $c-=1;
                } while($c>=1);

            echo "<h2>$v! = $fat</h2>";

            echo "<a href='javascript:history.go(-1)'><button>Voltar</button></a>";?>
            </form>
        </div>
    </body>
</html>