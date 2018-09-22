<?php
include "conn.php";
session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GA' ) && ($_SESSION["acesso"] != 'GG' ) )
{
  header("Location: dash_cad.php");
  exit;
  
  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">
function saidasuccessfully()
{
  setTimeout("window.location='dash_almox.php'",3000);
  
  
}
</script>
<link rel="icon" href="img/logo_oi.png">
	

  <title>EQP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>



<div class="container ">
<?php
$pt =$_POST['pt'];
$m =$_POST['m'];


$outra = $patri;


/*VERIFICAÇÃO
$sql = mysql_query ("select * from carga_colaborador where n_serie = '$serie' and id_col = '".$_SESSION['id']."' " );
$row = mysql_num_rows($sql);
if ($row == 0)
{


echo "<h1>Número de série não consta na sua carga!</h1>";
   echo "<script>saidasuccessfully()</script>"; 
  

  
}

 else if  (strlen($ba) != 15)
{

echo "<h3>Número do BA  inválido.</h3>";
   echo "<script>saidasuccessfully()</script>"; 


}






VERIFICÃO*/

$query = "update patrimonio join status on patrimonio.patrimonio = status.id_patrimonio set patrimonio.status_equip = '2', status.data_recebimento_ga = NOW() where status.protocolo = '$pt'";






$sql = mysql_query($query);


if($sql)
{
  
  echo "<h2>Recebido com sucesso!</h2>";
  echo "<script>saidasuccessfully()</script>";
  
}
else
{
  
  echo "Erro na baixa!";
  
}

?>



</div>




</body>
</html>

