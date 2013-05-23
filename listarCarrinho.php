<?

include_once'conexao/conecta.php';

$sql = "SELECT * from produtos";
$qr = mysql_query($sql) or die (mysql_error());

while($ln = mysql_fetch_assoc($qr)){

echo '<h2>'.$ln['NOME_PRODUTO'].'</h2> <br />';

echo '<img src="imagens/'.$ln['IMAGEMURL_PRODUTO'].'" /> <br />';

echo 'Pre&ccedil;o: R$'.$ln['PRECOVENDA_PRODUTO'].'<br />';

echo '<a href="carrinho.php?acao=add&COD_PRODUTO='.$ln['COD_PRODUTO'].'">Comprar</a>';
}






?>

