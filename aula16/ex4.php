<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 4</title>
    </head>
    <body>
        <div>
            <?php                        
                $frase = "Eu vou estudar PHP agora.";
                $cont = str_word_count($frase, 0);
                echo $cont;

                /*Função str_word_count() : Conta quantas palavras uma string possui.
                0 = conta palavra
                1 = cria um vetor
                2 = um vetor mostra o posição de cada palavra dentro da string
                */
            ?>
        </div>
    </body>
</html>