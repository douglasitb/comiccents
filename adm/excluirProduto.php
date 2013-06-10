<?php
include_once '../conexao/conecta.php';
include_once '../funcoes/funcoesUteis.inc';
validaAutenticacao("../logout.php", "../conexao/conecta.php", "ADM");
$codigoProduto = $_GET["codigoproduto"];
if(mysql($sql))
{
    echo "Produto excluido com Sucesso!<br/>";
    echo "<a href=listarprodutos.php>Listar Produtos </a>";
}

?>
