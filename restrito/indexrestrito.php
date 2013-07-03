<?php
include_once '../conexao/conecta.php';

session_start();

if(isset($_SESSION["usuario"]))
    $usuario = $_SESSION["usuario"];

if(isset($_SESSION["senha"]))
    $senha = $_SESSION["senha"];

echo "Seja bem vindo ".$usuario."<br/>";


echo"<a href=../logout.php>Logout</a>";
?>