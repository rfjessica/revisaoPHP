<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 3</title>
    </head>
    <body>
        <div>
            <?php 
                $n = isset($_GET["num"])?$_GET["num"]:0;

                $r = 0;
                $cont = 0;
        
                for($i=1; $i<=10; $i++){
                    if($n%$i == 0){
                        $r = $n/$i;
                        echo "$n pode ser dividido por $i ($n/$i = $r)<br/>";
                        $cont+=1;
                    }
                }

                /*for($i=1; $i<=100; $i++){
                    if($n%$i == 0){
                        $r = $n/$i;
                        echo "$n pode ser dividido por $i ($n/$i = $r)<br/>";
                        $cont+=1;
                    }
                }*/

                if($cont > 2){
                    echo "<br/>No intervalo entre 1 e 10, $n tem $cont divisores.<strong> ($n NÃO É PRIMO)</strong><br/>";
                    //echo "<br/>No intervalo entre 1 e 100, $n tem $cont divisores.<strong> ($n NÃO É PRIMO)</strong>";
                }elseif($cont == 2){
                    echo "<br/>No intervalo entre 1 e 10, $n tem $cont divisores.<strong> ($n É PRIMO)</strong><br/>";
                    //echo "<br/>No intervalo entre 1 e 100, $n tem $cont divisores.<strong> ($n É PRIMO)</strong>";
                }else{
                    echo "<br/>No intervalo entre 1 e 10, $n tem $cont divisor.<strong> ($n É PRIMO)</strong><br/>";
                    //echo "<br/>No intervalo entre 1 e 100, $n tem $cont divisor.<strong> ($n É PRIMO)</strong>";
                }

                echo "<br/><a href='javascript:history.go(-1)'><button>Voltar</button></a>";
            ?>
        </div>
    </body>
</html>