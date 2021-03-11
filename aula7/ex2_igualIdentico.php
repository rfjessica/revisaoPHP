<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Exercício 2</title>
</head>
<body>
    <?php 
        $a = 3; //int
        $b = "3"; //String

        $r = ($a == $b) ? "SIM" : "NÃO"; //Os valores são iguais (mesmo em tipos diferentes)?
        echo "As variáveis $a e $b são iguais? $r<br/>";

        $r = ($a === $b) ? "SIM" : "NÃO"; //Os valores e tipos são iguais?
        echo "<br/>As variáveis $a e $b são idênticas? $r";
    ?>
</body>

</html>