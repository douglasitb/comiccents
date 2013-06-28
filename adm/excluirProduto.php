<?php
include_once '../conexao/conecta.php';
include_once '../funcoes/funcoesUteis.inc';
validaAutenticacao("../logout.php", "../conexao/conecta.php", "ADM");

$codigoProduto = $_GET["codproduto"];
/*

$sql = "DROP produtos SET ";
$sql.= "NOME_PRODUTO = '$nomeProduto', DESCRICAO_PRODUTO='$descricao_produto',";
$sql.= "NUMERO_PAGS = '$numero_pags',, QUANTIDADEESTOQUE_PRODUTO='$qtde_estoque_produto',";
$sql.= "PRECO_PRODUTO = '$preco_produto', PRECOVENDA_PRODUTO='$precoVenda_produto',";
$sql.= "TAMANHO_PRODUTO = '$tamanho_produto', IMAGEMURL_PRODUTO='$imagem_url',";
$sql.= "ESTADO_FISICO = '$estado_fisico', EDITORA_PRODUTO='$editora_produto',";
$sql.= "FORNECEDORES_COD_FORNECEDOR = '$fornecedor_produto', COD_PRODUTO = '$codigoProduto'";
$sql.= "WHERE COD_PRODUTO='$codigoProduto'";*/

$sql = "DELETE FROM produtos WHERE COD_PRODUTO='$codigoProduto'"; 

if(mysql_query($sql))
{
    echo "Produto excluido com Sucesso!<br/>";
    echo "<a href=listarprodutos.php>Listar Produtos </a>";
}
else{
    echo mysql_error();
}
mysql_close();

?>
