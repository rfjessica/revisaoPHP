<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 3</title>
    </head>
    <body>
        <div>
            <form method="GET" action="ex3b.php"> 
                <!--<label for="num">Digite um número:</label>-->
                <label for="num">Escolha um número:</label>
                <?php
                    //echo "<input type='number' name='num'>"; 
                    echo "<select name='num'>";
                    for($i=1; $i<=10; $i++){
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
                <input type="submit" value="É primo?"/>
            </form>
        </div>
    </body>
</html>