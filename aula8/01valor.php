<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Valor e Raiz</title>
    </head>
    <body>
        <div>
            <?php 
                $valor = $_POST["v"];
                echo "O valor enviado foi $valor.";
            
                $r = sqrt($valor);
                echo "<br/>A raiz quadrada de $valor é $r.";
            ?>
        </div>
    </body>
</html>
