<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Exercício 3</title>
    </head>
    <body>
        <div>
            <?php 
                $est = isset($_GET["estado"])?$_GET["estado"]:0;

                switch($est){
                    case "Distrito Federal": 
                    case "Mato Grosso": 
                    case "Mato Grosso do Sul": 
                    case "Goiás": 
                        echo "Você mora na Região Centro Oeste."; break;

                    case "Alagoas": 
                    case "Bahia": 
                    case "Ceará": 
                    case "Maranhão": 
                    case "Paraíba": 
                    case "Pernambuco": 
                    case "Piauí": 
                    case "Rio Grande do Norte": 
                    case "Sergipe": 
                        echo "Você mora na Região Nordeste."; break;

                    case "Acre": 
                    case "Amapá": 
                    case "Amazonas": 
                    case "Pará": 
                    case "Rondônia": 
                    case "Roraima": 
                    case "Tocantins": 
                        echo "Você mora na Região Norte."; break;
                    
                    case "Paraná":
                    case "Rio Grande do Sul";
                    case "Santa Catarina": 
                        echo "Você mora na Região Sul."; break;
                    
                    case "Espírito Santo": 
                    case "Minas Gerais": 
                    case "Rio de Janeiro": 
                    case "São Paulo":
                        echo "Você mora na Região Sudeste."; break;

                    default: echo "Escolha uma UF."; break;
                }             
            ?>
            <br/><a href="javascript:history.go(-1)"><button>Voltar</button></a>
        </div>
    </body>
</html>
