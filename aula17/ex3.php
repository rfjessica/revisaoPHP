<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 3</title>
    </head>
    <body>
        <div>
            <?php                        
                $site = "Curso em Vídeo";
                $sub = substr($site, 0, 5);

                print($sub);

                $sub = substr($site, 7);
                echo "<br/>$sub ";

                $sub = substr($site, -5, 2);
                echo "<br/>$sub ";
            ?>
        </div>
    </body>
</html>