<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

$host = "127.0.0.1";
$user = "root";
$pass = "";
$database ="equipamentos";
$connection = mysql_connect($host,$user,$pass,$database) or die (mysql_error());
mysql_select_db($database)or die (mysql_error());



/*


$host = "db4free.net";
$user = "rudinei_feijo";
$pass = "1590101";
$database ="dbprimarios";
$connection = mysql_connect($host,$user,$pass,$database) or die (mysql_error());
mysql_select_db($database)or die (mysql_error());



$host = "mysql.hostinger.com.br";
$user = "u213856303_rudin";
$pass = "1597ru";
$database ="u213856303_pri";
$connection = mysql_connect($host,$user,$pass,$database) or die (mysql_error());
mysql_select_db($database)or die (mysql_error());
*/
?>



<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>




