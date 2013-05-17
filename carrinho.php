<?php
      session_start();

      if(!isset($_SESSION['carrinho'])){
         $_SESSION['carrinho'] = array();
      }


      if(isset($_GET['acao'])){

            if($_GET['acao'] == 'add'){
       
            $cod = intval($_GET['COD_PRODUTO']);
            if(!isset($_SESSION['carrinho'][$cod])){
               $_SESSION['carrinho'][$cod] = 1;
            }else{
               $_SESSION['carrinho'][$cod] += 1;
            }
         }
         
            if($_GET['acao'] == 'del'){
            $cod = intval($_GET['COD_PRODUTO']);
            if(isset($_SESSION['carrinho'][$cod])){
               unset($_SESSION['carrinho'][$cod]);
            }
         }


         if($_GET['acao'] == 'up'){
            if(is_array($_POST['NOME_PRODUTO'])){
               foreach($_POST['NOME_PRODUTO'] as  $cod => $qtde_estoque){
                  $cod  = intval($cod);
                  $qtde_estoque = intval($qtde_estoque);
                  if(!empty($qtde_estoque) || $qtde_estoque <> 0){
                     $_SESSION['carrinho'][$cod] = $qtde_estoque;
                  }else{
                     unset($_SESSION['carrinho'][$cod]);
                  }
               }
            }
         }

      }


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Carrinho de Compras</title>
</head>

<body>
<table>
    <caption>Carrinho de Compras</caption>
    <thead>
          <tr>
            <th width="244">Produto</th>
            <th width="79">Quantidade</th>
            <th width="89">Pre&ccedil;o</th>
            <th width="100">SubTotal</th>
            <th width="64">Remover</th>
          </tr>
    </thead>
            <form action="?acao=up" method="post">
    <tfoot>
           <tr>
            <td colspan="5"><input type="submit" value="Atualizar Carrinho" /></td>
            <tr>
            <td colspan="5"><a href="listarCarrinho.php">Continuar Comprando</a></td>
    </tfoot>

    <tbody>
               <?php
                     if(count($_SESSION['carrinho']) == 0){
                        echo '<tr><td colspan="5">N&uacute;mero de produtos no carrinho</td></tr>';
                     }else{

                        require("conexao/conecta.php");

                        $total = 0;
                        
                        foreach($_SESSION['carrinho'] as $cod => $qtde_estoque){
                              $sql   = "SELECT *  FROM produtos WHERE 'COD_PRODUTO'= '$cod'";
                              $qr    = mysql_query($sql) or die(mysql_error());
                              $ln    = mysql_fetch_assoc($qr);

                              $nome  = $ln['NOME_PRODUTO'];
                              $preco_produto = number_format($ln['PRECOVENDA_PRODUTO'], 2, ',', '.');
                              $sub   = number_format($ln['PRECOVENDA_PRODUTO'] * $$qtde_estoque, 2, ',', '.');

                              $total += $ln['PRECOVENDA_PRODUTO'] * $qtde_estoque;

                           echo '<tr>
                                 <td>'.$nome.'</td>
                                 <td><input type="text" size="3" name="prod['.$cod.']" value="'.$qtde_estoque.'" /></td>
                                 <td>R$ '.$preco_produto.'</td>
                                 <td>R$ '.$sub.'</td>
                                 <td><a href="?acao=del&id='.$cod.'">Remove</a></td>
                              </tr>';
                        }
                           $total = number_format($total, 2, ',', '.');
                           echo '<tr>
                                    <th colspan="4">Total</th>
                                    <th>R$'.$total.'</th>
                              </tr>';
                     }
               ?>

     </tbody>
        </form>
</table>

</body>
</html>
