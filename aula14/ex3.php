<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 3</title>
    </head>
    <body>
        <div>
           <?php //Rotinas com múltiplos argumentos
                function soma($a, $b) {
                    $p = func_get_args(); //o vetor p retorna uma lista de argumentos
                    $t = func_num_args(); //total de argumentos
                    $s = 0;

                    for($i=0; $i<$t; $i++){
                        $s += $p[$i];
                    }

                    return $s;
                }

                $r = soma(3, 5, 2); echo "A soma dos valores é $r.<br/>";

                $r = soma(3, 5, 2, 8, 9, 4); echo "A soma dos valores é $r.<br/>";
           ?>
        </div>
    </body>
</html>