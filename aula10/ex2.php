<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 2</title>
    </head>
    <body>
        <div>
            <?php 
                $d = isset($_GET["ds"])?$_GET["ds"]:0;

                switch($d){
                    case 1:
                    case 7:
                        echo "Descanse."; 
                    break;
                    case 2:
                        case 3:
                            case 4:
                                case 5:
                                    case 6:
                                        echo "Levanta, vai estudar!"; break;
                                        default: echo "Dia da semana inválido..."; break; 
                }
             
            ?>
            <br/><a href="javascript:history.go(-1)"><button>Voltar</button></a>
        </div>
    </body>
</html>
