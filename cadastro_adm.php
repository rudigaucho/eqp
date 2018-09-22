<?php 

Include "conn.php";

session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'ADM' ))
{
  header("Location: index.html");
  exit;
  
  
}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>

<script language="javascript">
function noenter() {
var tecla = event.keyCode;
if ((tecla == 13)) {
return false;
}
return tecla;
}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="icon" href="logo.png">

</style>

<script type="text/javascript">
function completar_campos(){
document.getElementById("loading").style.display = "block";
var con_consulta;
if (window.XMLHttpRequest){

con_consulta = new XMLHttpRequest();

}else{


con_consulta  = new ActiveXObject("Microsoft.XMLHTTP");



}

con_consulta.onreadystatechange = function(){

if(con_consulta.readyState ==  4 && con_consulta.status == 200){

document.getElementById("form").innerHTML = con_consulta.responseText;
document.getElementById("loading").style.display = "none";

}

}

var pt = document.getElementById("pt").value;

con_consulta.open("GET","processar_adm.php?pt="+pt,true);
con_consulta.send(null);






}
</script>




<title>Controle</title>
  <link rel="icon" href="img/key.png">
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  
   
   <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->


  <style>
     #jumbo{
  background: url(empresa.jpg) no-repeat;

}
  </style>
</head>
<body>

<div class="jumbotron text-center " id="jumbo">
   <br><br><br><br><br><br><br>
</div>
<p  style="font-size: 12px;"><i><strong>© Copyright Serede S/A Desenvolvimento Rudinei Rossales  </strong></i></p>
<div class="navbar navbar-inverse navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="#"> <?php echo $_SESSION["nome"]?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
              
         
       
            
       
        <li class="active"><a href="adm.php">Voltar</a></li>

                </ul>
            </div>

        </div>
    </div>

<form class="form col-sm-10" role="form" name="seachform" method="post" id="form" action="enviar_adm.php "  >

   

    <div class="form-group " >
   <img src="loading.gif" id="loading" style="display:none; width:50px;height:50px;   " />
       <label for="email">PATRIMONIO:</label>
      <input type="text" class="form-control" id="pt" name="pt" onblur="completar_campos();"    >
    </div>
     <div class="form-group">




      <label for="email">TÉCNICO:</label>  
      <input type="text" class="form-control" id="tec" name="tec"  required>
    </div>
     <div class="form-group">

       <label for="email">ID TÉCNICO:</label>
      <input type="text" class="form-control" id="id" name="id"    >
    </div>
       <div class="form-group">
       <label for="email">GA RESPONSÁVEL:</label>  
      <input type="text" class="form-control" id="ga" name="ga"  required>
    </div>
     <div class="form-group">
       <label for="email">BASE:</label>  
      <input type="text" class="form-control" id="base" name="base"  required>
    </div>
    <div class="form-group">
       <label for="email">EQUIPAMENTO:</label>  
      <input type="text" class="form-control" id="eqp" name="eqp"  required>
    </div>
    <div class="form-group">
       <label for="email">MODELO:</label>  
      <input type="text" class="form-control" id="modelo" name="modelo"  required>
    </div>

   
      
    


  






   
    
   
 
   

 
   
     <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  



</body>




</html>


