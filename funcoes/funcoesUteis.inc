<?php

function expiracao($tempoExpiracao,$paginaRedirecionada="frmlogin.php")
{
$dataSalva = $_SESSION["ultimoAcesso"];
$agora = date("Y-n-j H:i:s");
$tempo_transcorrido = (strtotime($agora)-strtotime($dataSalva));
echo $tempo_transcorrido    ."<br/>";
if($tempo_transcorrido > $tempoExpiracao)
{
    unset($_SESSION["usuario"]);
    unset($_SESSION["senha"]);
    header("Location:$paginaRedirecionada");
}
}

function validaAutenticacao($paginaDirecionada,$endConexao, $tipoUsuario){
    
    session_start();
    
    if(isset($_SESSION["usuario"]))
        $nomeUsuario = $_SESSION["usuario"];
        if(isset($_SESSION["senha"]))
        $senhaUsuario = $_SESSION["senha"];
        
     if(!(empty($nomeUsuario)) or !(empty($senhaUsuario)))
    
     {
         include_once "$endConexao";
         $sql = "SELECT NOME_USUARIO, SENHA_USUARIO,TIPO_USUARIO
             FROM usuario
             WHERE  NOME_USUARIO= '$nomeUsuario'";
         
         $result =mysql_query($sql) or mysql_error();
         $linhas = mysql_num_rows($result);
         
         if($linhas == 0) {
             
              //echo "Você não efetuou login!";
            header("Location:$paginaDirecionada");
         } else { 
             while($usuario = mysql_fetch_array($result))
             {
                 if($senhaUsuario !== $usuario["SENHA_USUARIO"])
                 {
                     
                    // echo "Você não efetuou login";
                     header("Location:$paginaDirecionada");
                 }
                 if($tipoUsuario !== $usuario["TIPO_USUARIO"]){
                     // echo "Você não tem acesso !";
                     header("Location:$paginaDirecionada");
                     
                 }
                 }
              
      }
     }else{
          echo "Você não efetuou login !";
         // header("Location:$paginaDirecionada");
         
     }   
     
}

?>
