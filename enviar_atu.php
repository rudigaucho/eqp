<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='adm.php'",3000);
	
	
}
</script> 


<?php 



?>

<?php
include "conn.php";
//session_start();
//if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'gra' ))
//{
 // header("Location: index.html");
  //exit;
  
  
//}

//if(isset($_FILES['arquivo'],$_FILES['arquivo2'])) {




?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='adm.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

 <title>EDITAR EQP</title>


</head>



<body>








<?php









  




$pt =$_POST['pt'];
$tec =$_POST['tec'];
$id_tec =$_POST['id_tec'];
$ga =$_POST['ga'];
$id_ga =$_POST['id_ga'];
$base =$_POST['base'];
$eqp =$_POST['eqp'];
$modelo =$_POST['modelo'];







$query = "update patrimonio set  patrimonio ='$pt',tecnico ='$tec',id_tec ='$id_tec',ga ='$ga',id_ga ='$id_ga',base ='$base',equip ='$eqp',modelo ='$modelo'  where patrimonio ='$pt'";




$sql = mysql_query($query);


if($sql )
{
  
  
    echo ' <h2>EDITADO COM SUCESSO!';
  

  echo "<script>saidasuccessfully()</script>";

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}










?>






















</body>


</html>