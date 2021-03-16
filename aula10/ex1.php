<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 1</title>
    </head>
    <body>
        <div>
            <?php 
                $n = isset($_GET["num"])?$_GET["num"]:0;
                
                $o = isset($_GET["oper"])?$_GET["oper"]:1;

                switch($o){
                    case 1: $r = $n*2; $calc = "<br/O dobro de $n é $r."; break; //dobro
                    case 2: $r = pow($n, 3); $calc= "<br/>$n ao cubo é $r."; break; //cubo
                    case 3: $r = sqrt($n); $calc= "<br/A raiz quadrada de $n é $r.";break; //raiz quadrada
                    //default: break;
                }

            echo "O valor que você inseriu: $n $calc";?>

            <a href="ex1.html">
                <button>Voltar</button>
            </a>
        </div>
    </body>
</html>