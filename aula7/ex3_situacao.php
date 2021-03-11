<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 3</title>
    </head>
    <body>
        <?php 
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];

            $m = ($nota1+$nota2)/2;
            
            echo "A média entre $nota1 e $nota2 é $m<br/>";

            //$sit = $m<6 ? "REPROVADO" : "APROVADO";

            //echo "<br/>A situação do aluno é $sit";

            echo "<br/>A situação do aluno é " . ($sit = $m<6 ? "REPROVADO" : "APROVADO");
        ?>
    </body>
</html>