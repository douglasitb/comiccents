<?php
include_once 'conexao/conecta.php';
session_start();
$dataSalva = ("Y-n-j H:i:s");
$_SESSION["ultimoAcesso"] = $dataSalva;

/*$_SESSION["usuario"] = $_POST["usuario"];
$_SESSION["senha"] = $_POST["senha"];
*/

$nomeUsuario = $_POST["usuario"];
$senhaUsuario = $_POST["senha"];

//echo $nomeUsuario;
//echo $senhaUsuario;
$sql = "SELECT NOME_USUARIO,SENHA_USUARIO,TIPO_USUARIO
              FROM usuario
                          WHERE NOME_USUARIO = '$nomeUsuario'";
                        
$resultado = mysql_query($sql);
$linhas = mysql_num_rows($resultado);
  

if($linhas == 0)
{
  echo "Usuario não encontrado<br/>";
  echo"<a href=frmloginAdm.php>Voltar</a>;";
}
else{
    while($usuario = mysql_fetch_array($resultado)){
        if($usuario["tipo_usuario"] == "ADM"){
            if($usuario == ['SENHA_USUARIO']){
                echo "Senha Invalida !";
                echo"<a href=frmloginAdm.php>Voltar</a>;";
            }
            else{
                $_SESSION["usuario"] = $nomeUsuario;
                $_SESSION["senha"] = $senhaUsuario;
                header("Location:indexadm.php");
            }
            }else{
                echo "Tipo de usuario inválido !";
                echo"<a href=frmloginAdm.php>Voltar</a>;";
        }
    }
}
/*if ($usuario == "adm" and $senha == "genoveva"){  
  header("Location:indexuser.php");  
}
else{    
   header("Location:indexrestrito.php");
}
 
/*echo session_id(); // codigo identificador da sessão criada
header("Location:indexrestrito.php"); */

?>
