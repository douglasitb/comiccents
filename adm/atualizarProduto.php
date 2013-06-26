<?php
include_once '../conexao/conecta.php';
include_once '../funcoes/funcoesUteis.inc';
validaAutenticacao("../logout.php", "../conexao/conecta.php", "ADM");

// echo $_POST["nomeproduto"];
$codigoProduto      = $_POST["codproduto"];
/*$nomeProduto        = $_POST["nomeproduto"];
$descricao_produto  = $_POST["descricao"];
$qtde_estoque       = $_POST["quantidade"];
$preco_produto      = $_POST["preco"];
$precoVenda_produto = $_POST["precovenda"];
$tamanho_produto    = $_POST["tamanho"];
$imagem_url         = $_POST["imagemurl"];
$estado_fisico      = $_POST["estadofisico"];
$editora_produto    = $_POST["editoraproduto"];
$numero_pags        = $_POST["numeropags"];*/

$sql = "UPDATE * FROM produtos SET ";
/*$sql.= "NOME_PRODUTO = '$nomeProduto', DESCRICAO_PRODUTO='$descricao_produto',";
$sql.= "NUMERO_PAGS = '$numero_pags',, QUANTIDADEESTOQUE_PRODUTO='$qtde_estoque',";
$sql.= "PRECO_PRODUTO = '$preco_produto', PRECOVENDA_PRODUTO='$precoVenda_produto',";
$sql.= "TAMANHO_PRODUTO = '$tamanho_produto', IMAGEMURL_PRODUTO='$imagem_url',";
$sql.= "ESTADO_FISICO = '$estado_fisico', EDITORA_PRODUTO='$editora_produto',";*/
$sql.= "WHERE COD_PRODUTO='$codigoProduto'";

if(mysql_query($sql))
{
    echo "Produto atualizado com sucesso!<br/>";
    echo "<a href=listarprodutos.php> Listar Produtos</a>";
}
else {
    echo mysql_error();
    }
    mysql_close();
?>
