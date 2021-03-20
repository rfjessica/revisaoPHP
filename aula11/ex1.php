<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 1</title>
    </head>
    <body>
        <div>
            <?php 
                $c = 1;
                while($c <= 10){
                    echo $c . "<br/>";
                    $c+= 1; //$c++;
                }

                echo "<br/>";

                $c = 10;
                while($c >= 1){
                    echo $c . "<br/>";
                    $c-= 1; //$c--;
                }      
            ?>
        </div>
    </body>
</html>