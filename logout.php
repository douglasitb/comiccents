<?php

session_start();

unset($_SESSION["usuario"]);
unset($_SESSION["senha"]);

echo "<a href=index.php>Página Principal</a>";

?>
