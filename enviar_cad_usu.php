



<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='adm.php'",7000);
	
	
}


</script> 

<?php

session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'ADM' ))
{
  header("Location: index.html");
  exit;
  
  
}


include "conn.php";
//session_start();
//if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'gra' ))
//{
 // header("Location: index.html");
  //exit;
  
  
//}









	

	
//}

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

<title>CADASTRO USUÁRIO</title>


</head>



<body>








<?php

$id =$_POST['id'];



$nome =$_POST['nome'];
$id_tec =$_POST['id_tec'];
$acesso =$_POST['acesso'];
$login =$_POST['login'];
$senha =$_POST['senha'];
$uf =$_POST['uf'];


$sql = mysql_query ("select * from usuario where id = '$id'" );
$row = mysql_num_rows($sql);
 if  ($row >= 1)
{


echo "USUÁRIO JÁ CADASTRADO VERIFIQUE!";
   
  

  
}
 else
 {

  



 



$query = "insert into usuario (id,nome,acesso,senha,login,uf)";

$query.= "values ('$id','$nome','$acesso','$senha','$login','$uf')";




$sql = mysql_query($query);


if($sql )
{
  
  
    echo '  <h2>CADASTRADO COM SUCESSO!<br>';
  
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