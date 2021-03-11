<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Exercício 1</title>
</head>
<body>
    <?php 
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];

        $tipo = $_GET["op"];

        echo "Os valores passados foram $n1 e $n2";

        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;

        echo "<br/>O resultado será $r";
    ?>
</body>

</html>