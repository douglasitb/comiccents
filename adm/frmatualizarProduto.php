<?php
$codigoProduto = $_REQUEST["codigo"];

include_once '../conexao/conecta.php';
include_once '../funcoes/funcoesUteis.inc';

echo "<!DCOKTYPE html>"

echo
"
    <html>
    <head>
    <meta charset= UTF-8>
    <meta lang= pt-br>
    <title>Formulário Atualizar produto</title>
    </head>
    
    <body>       
               
        <form>";
        $sql = "SELECT * FROM produtos WHERE COD_PRODUTO  = '$codigoProduto'";
        $result = mysql_query($sql);
        while ($produtos = mysql-fetch_array($result))
        {
            echo"
        <input type=text name=nomeproduto value='".$produto["NOME_PRODUTO"]   ."'></br>
            
        <input type=text name=descricao value='".$produto   ."'></br>
        <input type=text name=quantidade value='".$produto[NOME_PRODUTO]   ."'></br>
        <input type=text name=preco value='".$produto[NOME_PRODUTO]   ."'></br>
        <input type=text name=precovenda value='".$produto[NOME_PRODUTO]   ."'></br>
        <input type=text name=qtde_estoque value='".$produto[NOME_PRODUTO]   ."'></br>
        <input type=text name=tamanho
        
        <input type=text name=numero_pags/></br></br>
        <input type=text name=estado_fisico/></br></br>
        <input type=text name=editora_produto/></br></br>
        <input type=text name=imagem_url/></br></br>      
                      
"
           
            
        }

            

        echo '</form>'
        
        
       

    







"

?>
