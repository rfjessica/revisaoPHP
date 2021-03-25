<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 5</title>
    </head>
    <body>
        <div>
            <?php                        
                $site = "Curso em Vídeo";
                $vetor = explode(" ", $site);

                //Função explode() : Quebra uma string e coloca os itens em um vetor.

                print_r($vetor); 

                $nome = "Maria";
                $vetor = str_split($nome);

                //Função str_split() : Coloca cada letra de uma string em uma posição de um vetor.

                echo "<br/>";

                print_r($vetor);

                $vt[0]="Curso"; $vt[1]="em"; $vt[2]="vídeo";
                $texto = implode("#", $vt);
                //$texto = implode(" ", $vetor);
                print("<br/>".$texto);

                //Função implode() : Transforma um vetor inteiro em uma string.

            ?>
        </div>
    </body>
</html>