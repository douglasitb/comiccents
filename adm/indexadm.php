<?php
include_once '../funcoes/funcoesUteis.inc';
validaAutenticacao("../logout.php", "../conexao/conecta.php");

echo"<h1>Home - Adm</h1>";
echo"<a href=../logout.php>LOGOUT</a>;";
?>
