<?php
include_once '../conexao/conecta.php';
include_once '../funcoes/funcoesUteis.inc';
validaAutenticacao("../logout.php", "../conexao/conecta.php", "ADM");

$codigoProduto = $_GET["COD_PRODUTO"];
$nomeProduto = $_GET["NOME_PRODUTO"];
$descricao_produto = $_GET["DESCRICAO_PRODUTO"];
$preco_produto = $_GET["PRECO_PRODUTO"];
$precoVenda_produto = $_GET["PRECOVENDA_PRODUTO"];
$qtde_estoque_produto = $_GET["QUANTIDADEESTOQUE_PRODUTO"];
$imagem_url = $_GET["IMAGEMURL_PRODUTO"];
$tamanho_produto = $_GET["TAMANHO_PRODUTO"];
$fornecedor_produto = $_GET["FORNECEDOR_COD_FORNECEDOR"];
$estado_fisico = $_GET["ESTADO_FISICO"];
$editora_produto = $_GET["EDITORA_PRODUTO"];
$numero_pags = $_GET["NUMERO_PAGS"];

$sql = "DROP produtos SET ";
$sql.= "NOME_PRODUTO = '$nomeProduto', DESCRICAO_PRODUTO='$descricao_produto',";
$sql.= "NUMERO_PAGS = '$numero_pags',, QUANTIDADEESTOQUE_PRODUTO='$qtde_estoque_produto',";
$sql.= "PRECO_PRODUTO = '$preco_produto', PRECOVENDA_PRODUTO='$precoVenda_produto',";
$sql.= "TAMANHO_PRODUTO = '$tamanho_produto', IMAGEMURL_PRODUTO='$imagem_url',";
$sql.= "ESTADO_FISICO = '$estado_fisico', EDITORA_PRODUTO='$editora_produto',";
$sql.= "FORNECEDORES_COD_FORNECEDOR = '$fornecedor_produto', COD_PRODUTO = '$codigoProduto'";
$sql.= "WHERE COD_PRODUTO='$codigoProduto'";

if(mysql($sql))
{
    echo "Produto excluido com Sucesso!<br/>";
    echo "<a href=listarprodutos.php>Listar Produtos </a>";
}
else{
    echo "Erro ao executar";
}
?>
