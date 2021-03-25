<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 6</title>
    </head>
    <body>
        <div>
            <?php                        
                $letra = chr(67);
                echo "A letra de código 67 é $letra";

                $letra = "C";
                $cod = ord($letra);
                print("<br/>A letra $letra tem código $cod");

                /**Função chr() : Retorna um caractere de acordo com seu código ASCII passado como parâmetro.
                Função ord() : Retorna o código ASCII de um caractere passado como parâmetro. */
            ?>
        </div>
    </body>
</html>