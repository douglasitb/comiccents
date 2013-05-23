<?php
      session_start();

      if(!isset($_SESSION['carrinho'])){
         $_SESSION['carrinho'] = array();
      }


      if(isset($_GET['acao'])){

            if($_GET['acao'] == 'add'){
            $id = intval($_GET['COD_PRODUTO']);
            if(!isset($_SESSION['carrinho'][$id])){
               $_SESSION['carrinho'][$id] = 1;
            }else{
               $_SESSION['carrinho'][$id] += 1;
            }
         }


         if($_GET['acao'] == 'del'){
            $id = intval($_GET['COD_PRODUTO']);
            if(isset($_SESSION['carrinho'][$id])){
               unset($_SESSION['carrinho'][$id]);
            }
         }


         if($_GET['acao'] == 'up'){
            if(is_array($_POST['prod'])){
               foreach($_POST['prod'] as $id => $qtd){
                  $id  = intval($id);
                  $qtd = intval($qtd);
                  if(!empty($qtd) || $qtd <> 0){
                     $_SESSION['carrinho'][$id] = $qtd;
                  }else{
                     unset($_SESSION['carrinho'][$id]);
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
                        echo '<tr><td colspan="5">N&atilde;o h&aacute; produtos no carrinho</td></tr>';
                     }else{

                        require("conexao/conecta.php");

                        $total = 0;
                        foreach($_SESSION['carrinho'] as $id => $qtd){
                              $sql   = "SELECT *  FROM produtos WHERE COD_PRODUTO = '$id'";
                              $qr    = mysql_query($sql) or die(mysql_error());
                              $ln    = mysql_fetch_assoc($qr);

                              $nome  = $ln['NOME_PRODUTO'];
                              $preco = number_format($ln['PRECO_PRODUTO'], 2, ',', '.');
                              $sub   = number_format($ln['PRECO_PRODUTO'] * $qtd, 2, ',', '.');

                              $total += $ln['PRECO_PRODUTO'] * $qtd;

                           echo '<tr>
                                 <td>'.$nome.'</td>
                                 <td><input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td>
                                 <td>R$ '.$preco.'</td>
                                 <td>R$ '.$sub.'</td>
                                 <td><a href="?acao=del&COD_PRODUTO='.$id.'">Remove</a></td>
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