<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 2</title>
    </head>
    <body>
        <div>
            <form method="GET" action="ex2b.php"> 
            <?php 
                $c = 1;
                while($c<=5){
                    echo "Valor $c: <input type='number' name='v$c' min='0' max='100' value='0'/><br/><br/>";
                    $c++;
                }
                echo "<input type='submit' value='Enviar'/>";?>
            </form>
        </div>
    </body>
</html>