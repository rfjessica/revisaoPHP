<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 3</title>
    </head>
    <body>
        <div>
            <form method="GET" action="ex3b.php"> 
                <label for="num">Escolha um número:</label>
                <?php 
                    echo "<select name='num'>";
                    $c=1;
                    do{
                        echo "<option value='$c'>$c</option>";
                        $c+=1;
                    } while($c<=10);
                    echo "</select>";
                ?>
                <input type="submit" value="Enviar"/>
            </form>
        </div>
    </body>
</html>