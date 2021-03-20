<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 3</title>
    </head>
    <body>
        <div>
            <?php 
                $ini = isset($_GET["x"])?$_GET["x"]:0;                
                $fim = isset($_GET["y"])?$_GET["y"]:0;
                $i = isset($_GET["cont"])?$_GET["cont"]:0;

                if($ini <= $fim){
                    while($ini <= $fim){
                        echo $ini . "<br/>"; 
                        $ini+= $i;
                    }
                }else{
                    while($ini >= $fim){
                        echo $ini . "<br/>"; 
                        $ini-= $i;
                    }
                }
            
            echo "<br/><a href='javascript:history.go(-1)'><button>Voltar</button></a>";?>
        </div>
    </body>
</html>