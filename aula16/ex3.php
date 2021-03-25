<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 3</title>
    </head>
    <body>
        <div>
            <?php                        
                $txt = "Esse é um exemplo de string gigante que...";

                $r = wordwrap($txt, 5, "<br/>\n", false);

                echo($r);

                //Função wordwrap() : Cria quebras de linha ou divisões em uma string em um tamanho específico.

                $txt = "Curso em Vídeo";
                $tamanho = strlen($txt); echo "<br/>".$tamanho;

                echo "<br/>";

                $nome = "   José da Silva   ";
                echo(strlen($nome));
                $novo = trim($nome);
                echo($novo);
                echo(Strlen($novo));

                /**Função strlen() : Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco).
                 * Função trim() : Elimina espaços em branco antes e depois de uma string.
                 * Função ltrim() : Elimina espaços no início de uma string.
                 * Função rtrim() : Elimina espaços em branco no final de uma string.
                 */
            ?>
        </div>
    </body>vo
</html>