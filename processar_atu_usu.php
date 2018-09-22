

<?php include "conn.php"; 

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

var id = document.getElementById("id").value;

con_consulta.open("GET","processar_atu_usu.php?id="+id,true);
con_consulta.send(null);






}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function fnExcelReport() {
    var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
    tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';

    tab_text = tab_text + '<x:Name>Relatorio Caixa Fechada</x:Name>';

    tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
    tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';

    tab_text = tab_text + "<table border='1px'>";
    tab_text = tab_text + $('#myTable').html();
    tab_text = tab_text + '</table></body></html>';

    var data_type = 'data:application/vnd.ms-excel';
    
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        if (window.navigator.msSaveBlob) {
            var blob = new Blob([tab_text], {
                type: "application/csv;charset=utf-8;"
            });
            navigator.msSaveBlob(blob, 'Test file.xls');
        }
    } else {
        $('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
        $('#test').attr('download', 'relatorio.xls');
    }

}





</script>





<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='adm.php'",3000);
  
  
}



</script>

  <link rel="icon" href="img/key.png">
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



     <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->


</head>
<body>


<?php

$id2 = $_GET['id'];
$seleciona_dados = mysql_query("select * from usuario where id ='".$_GET['id']."'");
$linha_recupera_dados = mysql_num_rows($seleciona_dados);
$lin_dado_cli = mysql_fetch_array($seleciona_dados);
if($linha_recupera_dados == 0 ){ 

echo '
 <form class="form" role="form" id="form" name="seachform" method="post" action="enviar_atu_usu.php "  >

   <img src="loading.gif" id="loading" style="display:none; width:50px;height:50px;   " />

    <div class="form-group">

       <label for="email">ID:</label>
      <input type="text" value="'.$id2.'" class="form-control" id="id" name="id"  onblur="completar_campos();"   required >
    </div>

     <label for="email">PATRIMONIO INEXISTENTE.!!:</label>  


     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  




       


     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  
';
}


else 
{

echo '

 <form class="form" role="form" id="form" name="seachform" method="post" action="enviar_atu_usu.php "  >
<img src="loading.gif" id="loading" style="display:none; width:50px;height:50px;   " />
   

    <div class="form-group">

       <label for="email">ID:</label>
      <input type="text" class="form-control" id="id" value="'.$id2.'"  name="id"  onblur="completar_campos();"   required >
    </div>
     <div class="form-group">




      <label for="email">NOME:</label>  
      <input type="text" class="form-control" id="nome" value="'.$lin_dado_cli['nome'].'" name="nome"  required>
    </div>

    <label for="sel1">ACESSO:</label>
  <select class="form-control " id="acesso" name="acesso"  >


    <option value="GA">  GA </option>
<option value="GG" > GG  </option>
<option value="ADM">  ADM </option>
<option value="ALMOX">  ALMOX </option>

  </select>

       <div class="form-group">
       <label for="email">LOGIN:</label>  
      <input type="text" class="form-control" id="login" name="login" value="'.$lin_dado_cli['login'].'"  required>
    </div>
     
      
     <div class="form-group">

       <label for="email">SENHA:</label>
      <input type="text" class="form-control" id="senha" name="senha"   value="'.$lin_dado_cli['senha'].'" required >
    </div>


    



         
  





   
    
   
 
   

 
   
     <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Atualizar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

';
}

$ccto = $lin_dado_cli['ccto'];
$pt = $lin_dado_cli['id'];








  
  ?>

  <div id="ModalF" class="modal fade" role="dialog">
  <div class="modal-dialog">
   
    <!-- Modal content-->
    <div class="modal-content">


     <span style="margin-left: 15%;"><strong>CADASTRO DE FOTOS DEPOIS <br>CIRCUITO <?php echo $ccto; ?><br>PROTOCOLO <?php echo $pt; ?> </strong></span>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">


        <form role="form" id="form" name="seachform" method="post" action="cad_foto_dep.php " enctype="multipart/form-data" >
        <span><strong>FOTOS DEPOIS</strong></span><br>

        <input type="hidden" name="pt"  id="pt" value="<?php echo $pt; ?>">
<input type="file"  id="foto_dep1"  name="foto_dep1"/> 
    <input type="file" id="foto_dep2"  name="foto_dep2"/>
    <input type="file"  id="foto_dep3"  name="foto_dep3"/> <br>
 <button type="submit"  name="submit" id="submit" class="btn btn-default"  >Cadastrar</button> 
 
  
</form>






    </div>
    </div>
    </div>
    </div>


