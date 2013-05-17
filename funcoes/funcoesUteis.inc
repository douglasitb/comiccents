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

?>
