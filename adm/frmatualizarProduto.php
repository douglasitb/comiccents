<?php
$codigoProduto = $_REQUEST["codigo"];

include_once '../conexao/conecta.php';
include_once '../funcoes/funcoesUteis.inc';

echo "<!DOCKTYPE html>";

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
        <input type=text name=codproduto value='".$produtos["COD_PRODUTO"]   ."'></br>       
        <input type=text name=nomeproduto value='".$produtos["NOME_PRODUTO"]   ."'></br>
        <input type=text name=descricao value='".$produtos["DESCRICAO_PRODUTO"]   ."'></br>
        <input type=text name=quantidade value='".$produtos["QUANTIDADEESTOQUE_PRODUTO"]   ."'></br>
        <input type=text name=preco value='".$produtos["PRECO_PRODUTO"]   ."'></br>
        <input type=text name=precovenda value='".$produtos["PRECOVENDA_PRODUTO"]   ."'></br>
        <input type=text name=tamanho value='".$produtos["TAMANHO_PRODUTO"]     ."'></br>
        <input type=text name=imagemurlproduto value='".$produtos["IMAGEMURL_PRODUTO"]   ."'></br>
        <input type=text name=estadofisico value='".$produtos["ESTADO_FISICO"]   ."'></br>
        <input type=text name=editoraproduto value='".$produtos["EDITORA_PRODUTO"]   ."'></br>
        <input type=text name=numeropags value='".$produtos["NUMERO_PAGS"]   ."'></br>
           
        
        <input type=text name=numero_pags/></br></br>
        <input type=text name=estado_fisico/></br></br>
        <input type=text name=editora_produto/></br></br>
        <input type=text name=imagem_url/></br></br>      
";
           
            
        }

            

        echo '</form>';
        
        
       

    









?>
