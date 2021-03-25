<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 1</title>
    </head>
    <body>
        <div>
            <?php  
                $prod="leite";
                $preco=4.5;

                printf("O %s está custando R$ %.2f", $prod, $preco); //Permite exibir uma string com itens formatados.

                /* $d = valor decimal (positivo ou negativo)
                %u =  valor decimal sem sinal (apenas positivo)
                %f =  valor real
                %s = string */ 
            ?>
        </div>
    </body>
</html>