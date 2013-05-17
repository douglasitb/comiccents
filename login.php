<?php
session_start();

/*$_SESSION["usuario"] = $_POST["usuario"];
$_SESSION["senha"] = $_POST["senha"];
*/

$usuario = "usuario";
$senha = "senha";

if ($usuario == "adm" and $senha == "genoveva"){  
  header("Location:indexuser.php");  
}
else{    
   header("Location:indexrestrito.php");
}
 
/*echo session_id(); // codigo identificador da sessão criada
header("Location:indexrestrito.php"); */

?>
