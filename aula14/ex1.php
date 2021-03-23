<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 1</title>
    </head>
    <body>
        <div>
            <?php 
                /*function soma($a, $b) {
                    $s = $a + $b;
                    echo "<p>A soma vale $s</p>";
                }

                soma(3, 4);
                soma(8, 2);
                
                $x = 9; $y = 15;
                soma($x, $y);*/
                       
                function soma($a, $b) {
                    $s = $a + $b;
                    return $s;
                }

                $res = soma(3, 4); echo $res;
            ?>
        </div>
    </body>
</html>