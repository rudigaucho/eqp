



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

//if(isset($_FILES['arquivo'],$_FILES['arquivo2'])) {
	$permite = array('image/jpg', 'image/jpeg' , 'image/png');
    $type =$_FILES['foto'] ['type'];
   
         


//  ------------------------------------------ VERIFICACAO TAMANHO FOTOS ------------------------------------------------------- 


            $tamanho1 =$_FILES['foto']['size'];
         
           



// ------------------------------------------------------------- verificar vazios---

            if (empty($type))
            {

               $type = 'image/png';



            }

           

//-----------------------------------------------------------------------------------









	$extensao = strtolower(substr($_FILES['foto'] ['name'], -4));
	$novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "fotos/";





















if (!in_array($type,$permite)  )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG!";
	echo "<script>saidasuccessfully()</script>";
}

else
{
move_uploaded_file ($_FILES['foto'] ['tmp_name'], $diretorio.$novo_nome )	;








	

	
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

<title>CADASTRO EQP</title>


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
$uf =$_POST['uf'];

$sql = mysql_query ("select * from patrimonio where patrimonio = '$pt'" );
$row = mysql_num_rows($sql);
 if  ($row >= 1)
{


echo "PATRIMONIO JÁ CADASTRADO VERIFIQUE!";
   
  

  
}
 else
 {

  



 



$query = "insert into patrimonio (patrimonio,tecnico,id_tec,ga,id_ga,base,status_equip,equip,modelo,foto,uf )";

$query.= "values ('$pt','$tec','$id_tec','$ga','$id_ga','$base','2','$eqp','$modelo','$novo_nome','$uf')";




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
}


?>

























</body>


</html>