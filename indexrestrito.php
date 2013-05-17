<?php
include_once 'conexao/conecta.php';

session_start();

if(isset($_SESSION["usuario"]))
    $usuario = $_SESSION["usuario"];

if(isset($_SESSION["senha"]))
    $senha = $_SESSION["senha"];

echo "Seja bem vindo ".$usuario."<br/>";

echo "<a href='adm/listarprodutos.php'> Listar Produtos</a><br/>";
echo"<a href=adm/frm_incluirProduto.html>Incluir Produto</a>" . "<br/>";
echo"<a href=listarCarrinho.php>Carrinho de Compras</a>" . "<br/>";
echo"<a href=logout.php>Logout</a>";
?>