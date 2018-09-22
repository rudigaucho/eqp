
<?php
include "conn.php";

session_start();
//session_start();
//if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'gra' ))
//{
 // header("Location: index.html");
  //exit;
  
  
//}

//if(isset($_FILES['arquivo'],$_FILES['arquivo2'])) {
	
	


	
	
//}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='dash_cad.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>SISTEMA EQP</title>


</head>



<body>








<?php

$pt =$_POST['pt'];


$sql = mysql_query ("select * from patrimonio where patrimonio = '$pt'   and status_equip != '2' " );


$row = mysql_num_rows($sql);
 if  ($row >= 1)
{


echo "EQUIPAMENTO COM PENDENCIA ALMOX, VERIFIQUE!";
   
  

  
}

$sql2 = mysql_query ("select * from patrimonio where patrimonio = '$pt'   and id_ga != '".$_SESSION["id"]."' " );
$row2 = mysql_num_rows($sql2);


 if  ($row2 >= 1)
{


echo "EQUIPAMENTO NÃO PERTENCE A SUA CARGA!";
   
  

  
}

 else
 {








$query = "insert into status (data_envio_almox_cta,data_recebimento_almox_cta,data_envio_assis,data_retorno_assis,data_retorno_base,data_recebimento_ga,id_patrimonio)";

$query.= "values (NOW(),'0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','$pt')";

$query2 = " UPDATE patrimonio SET status_equip = '0' WHERE patrimonio  = '$pt'" ;


$sql = mysql_query($query);
$sql2 = mysql_query($query2);


if($sql && $sql2 )
{
	
	
		echo ' <h2>ENVIADA COM SUCESSO!';
	
	echo "<script>saidasuccessfully()</script>";
	

	
}
else
{
	
	echo "<h2>Erro no cadastro!</h2> ";
	
}

}


 

?>

























</body>


</html>