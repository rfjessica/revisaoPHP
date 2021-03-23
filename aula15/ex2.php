<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 2</title>
    </head>
    <body>
        <div>
            <?php                        
                include "funcoes.php";

                echo "<h1>Testando novas funções...<h1/>";

                ola();

                mostraValor(4);

                echo "<h2>Finalizando programa.<h2/>";

                //include "funcoes2.php"; 
                require "funcoes2.php";
            ?>
        </div>
    </body>
</html>