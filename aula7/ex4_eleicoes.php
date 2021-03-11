<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 4</title>
    </head>
    <body>
        <?php 
            $ano = $_GET["a"];

            $atual = date("Y");
            $idade = $atual - $ano;

            echo "Estamos em $atual. <br/>Você nasceu em $ano e sua idade é/será $idade.<br/>";

            //$r = ($idade > 18 && $idade <= 70) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";

            echo "<br/>Seu voto é " . ($r = ($idade > 18 && $idade <= 70) ? "OBRIGATÓRIO." : "NÃO OBRIGATÓRIO.");
        ?>
    </body>
</html>