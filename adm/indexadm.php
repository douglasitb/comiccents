<?php
include_once '../funcoes/funcoesUteis.inc';
validaAutenticacao("../logout.php", "../conexao/conecta.php");

echo"<h1>Home - Adm</h1>";
echo "<a href='listarprodutos.php'> Listar Produtos</a><br/>";
echo"<a href=frm_incluirProduto.html>Incluir Produto</a>" . "<br/>";
echo"<a href=../listarCarrinho.php>Carrinho de Compras</a>" . "<br/>","<br/>";


echo"<a href=../logout.php>LOGOUT</a>;";


?>
