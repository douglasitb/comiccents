<?php

session_start();

if(!isset($_SESSION['carrinho']))
{
    $_SESSION['carrinho'] = array(); // O carrinho é uma array, no qual guarda varias informações.
        
}

if(isset($_GET['acao']))
{
    if($_GET['acao'] == 'add')
    $cod = intval($_GET['COD_PRODUTO']);
    
    if(!isset($_SESSION['carrinho'][$cod]))
      {
      $_SESSION['carrinho'][$cod] = 1; //Aqui estou adicionando a quantidade do referido produto. 
      }  
    else
    {
        $_SESSION['carrinho'][$cod]+=1; // Aumentando a quantidade de produtos.
    }
}
// Fim da Rotina para adicionar o produto ao carrinho.
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrinho de Compras</title>
<meta lang="pt-br">
<meta charset="UTF-8">
</head>
 <body>
     <table>
     <caption>Carrinho</caption>
     <thead>
        <tr>
            <th width="250">Produto</th>
            <th width="100">Quantidade</th>
            <th width="100">Preço</th>
            <th width="100">Subtotal</th>
            <th width="100">Remover</th>
        </tr>
     </thead>
     <form>
     <tfoot>
         <tr>
             <td><input type="submit" value="Atualizar Carrinho"/></td>
         </tr>
          <tr>
             <td><a href="listarCarrinho.php">Compre mais</a></td>
         </tr>
     </tfoot>
     
     <tbody>
         <?php
     mostrarCarrinho();
         ?>
     </tbody>
     </table>
 </body>
 </html>
 <?php
 function mostrarCarrinho()
 {
     if(count($_SESSION['carrinho']==0)) // A Fu~ção count() é responsavel em contar os elementos de uma array.
     {
         echo "<tr><td>Não há produtos no carrinho!</td></tr>";
     }
     else{
         require 'conexao/conecta.php'; // O Require exige que seja incluido um determinado arquivo
                                        // Caso nao for possivel incluir o arquivo ocorrerá um erro fatal.
                                        // e a execução do script é abortada
         
         $totalProdutos = 0;
         foreach ($_SESSION['carrinho'] as $cod=> $quantidade) // O foreach é um laço de repetição exclusivo para utilização de matrizes.
         {
          $sql = "SELECT FROM produtos WHERE COD_PRODUTO ='$cod'";
          $query = mysql_query($sql);
          $result = mysql_fetch_array($query);
          
          $nomeProduto = $result["NOME_PRODUTO"];
          $precoProduto = $result["PRECOVENDA_PRODUTO"];
          $subTotal     = $result["PRECOVENDA_PRODUTO"] * $quantidade;
          
          echo '<tr>
       <td>'.$nomeProduto.'</td>;
       <td> <input type=text name=""> </td>;
       <td>'.$precoProduto.'</td>;
       <td>'.$subTotal.'</td>;
</tr>';
         }
     }
 }
 ?>