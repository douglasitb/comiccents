<?php
$host = "localhost";
$database = "comiccentsdb";
$username = "root";
$password = "12345678";

$connection = mysql_connect($host,$username,$password);
 mysql_select_db($database,$connection);

?>
