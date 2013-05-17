<?php
include_once 'conexao/conecta.php';
 
$nome_produto = $_POST["nomeproduto"];
$descricao_produto = $_POST["descricao"];
$preco_produto = $_POST["preco"];
$precoVenda_produto = $_POST["precovenda"];
$qtde_estoque = $_POST ["qtde_estoque"];
$tamanho_produto = $_POST ["tamanho_produto"];
$numero_pags = $_POST ["numero_pags"];
$estado_fisico = $_POST ["estado_fisico"];
$editora_produto = $_POST ["editora_produto"];
$imagem_url = $_POST ["imagem_url"];

 
/*echo $nome_produto."<br/>";
echo $descricao_produto."<br/>";
echo $qtde_produto ."<br/>";
echo $preco_produto ."<br/>";
echo $precoVenda_produto."<br/>";
echo $qtde_estoque ."<br/>";*/
//echo $tamanho_produto."<br/>";
/*echo $numero_pags."<br/>";
echo $estado_fisico ."<br/>";
echo $editora_produto."<br/>";
echo $imagem_url ."<br/>";*/

$cod_fornecedor = 1;
/*$sql ="INSERT INTO produtos(NOME_PRODUTO, DESCRICAO_PRODUTO,PRECO_PRODUTO,PRECOVENDA_PRODUTO,QUANTIDADEESTOQUE_PRODUTO, IMAGEMURL_PRODUTO, TAMANHO_PRODUTO, ESTADO_FISICO, EDITORA_PRODUTO, NUMERO_PAGS)
                   VALUES('$nome_produto','$descricao_produto','$preco_produto','$precoVenda_produto','$qtde_estoque','$imagem_url,'$tamanho_produto','$estado_fisico','$editora_produto','$numero_pags')";*/

$sql ="INSERT INTO produtos(NOME_PRODUTO,DESCRICAO_PRODUTO,PRECO_PRODUTO,PRECOVENDA_PRODUTO,QUANTIDADEESTOQUE_PRODUTO,IMAGEMURL_PRODUTO,TAMANHO_PRODUTO,FORNECEDORES_COD_FORNECEDOR,ESTADO_FISICO,EDITORA_PRODUTO,NUMERO_PAGS)
                   VALUES('$nome_produto','$descricao_produto','$preco_produto','$precoVenda_produto','$qtde_estoque','$imagem_url','$tamanho_produto','$cod_fornecedor','$estado_fisico','$editora_produto','$numero_pags')";
if(mysql_query($sql))
{ echo "Dados inseridos com Sucesso !<br/>";
}

else{ echo"Erro ao enviar!";}

?>
