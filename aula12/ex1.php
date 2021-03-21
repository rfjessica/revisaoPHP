<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 1</title>
    </head>
    <body>
        <div>
            <?php 
            $c = 1;
            do{
                echo " $c ";
                $c++;
            } while($c<=10);
            
            $c = 0;
            do{
                echo " $c ";
                $c+=2;
            } while($c<=20);  

            $c = 10;
            do{
                echo " $c ";
                $c-=1;
            } while($c>=1);  
            ?>
        </div>
    </body>
</html>