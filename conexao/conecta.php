<?php
$host = "lab1m08";
$database = "comiccentsdb";
$username = "root";
$password = "12345678";

$connection = mysql_connect($host,$username,$password);
 mysql_select_db($database,$connection);

?>
