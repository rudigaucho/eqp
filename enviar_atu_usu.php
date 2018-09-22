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

 <title>EDITAR USUÁRIO</title>


</head>



<body>








<?php









  




$id =$_POST['id'];
$nome =$_POST['nome'];
$acesso =$_POST['acesso'];
$login =$_POST['login'];
$senha =$_POST['senha'];








$query = "update usuario set  id ='$id',nome ='$nome',login ='$login',senha ='$senha',acesso ='$acesso'  where id ='$id'";




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