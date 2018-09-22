<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>

<?php
include "conn.php";

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>







<meta charset="UTF-8"/>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">








  <link rel="icon" href="img/logo_oi.png">







</head>



<body>



<?php

session_start();
if(!isset($_SESSION["senha"]) && !isset($_SESSION["login"]))
{
	header("Location: index.html");
	exit;
	
	
}

else
{

if($_SESSION['acesso'] == 'GA')
{
	
	header("Location: dash_cad.php");
}

if($_SESSION['acesso'] == 'GG')
{
	
	header("Location: dash_cad.php");
}


if($_SESSION['acesso'] == 'GO')
{
	
	header("Location: dash_cad.php");
}

if($_SESSION['acesso'] == 'IMPLANTACAO')
{
	
	header("Location: dash_cad.php");
}
if($_SESSION['acesso'] == 'ADM')
{
	
	header("Location: adm.php");
}
if($_SESSION['acesso'] == 'ALMOX')
{
	
	header("Location: dash_almox.php");
}



if($_SESSION['acesso'] != 'GA'  && $_SESSION['acesso'] != 'GG' && $_SESSION['acesso'] != 'ALMOX' && $_SESSION['acesso'] != 'GO' && $_SESSION['acesso'] != 'IMPLANTACAO' && $_SESSION['acesso'] != 'ADM' )
{
	
	header("Location: index.html");
}






}
	

	
	




?>

 





















</body>

</html>