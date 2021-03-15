<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 2</title>
    </head>
    <body>
        <div>
            <?php 
                $a = isset($_GET["ano"])?$_GET["ano"]:1900;
                $i = date("Y") - $a;
                echo "Você nasceu em $a e terá $i anos. <br/>";
                
                if($i < 16){
                    $tipoVoto = "não vota";
                }else{
                    if($i >= 16 && $i < 18){
                        $tipoVoto = "voto opcional";
                    }else{
                        $tipoVoto = "voto obrigatório";
                    }
                }

            echo "Para essa idade, $tipoVoto."
            ?>
        </div>
    </body>
</html>
