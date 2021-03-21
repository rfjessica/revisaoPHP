<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 2</title>
    </head>
    <body>
        <div>
            <form method="GET" action="ex2b.php">
                <label for="num">Escolha um número: </label>
                <select name="num">
                    <?php for($i=1; $i<=10; $i++){echo "<option value='$i'>$i</option>";}?>
                </select>
                <input type="submit" value="Tabuada"/>
            </form>
        </div>
    </body>
</html>