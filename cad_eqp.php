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
<!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
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
  <title>CONSULTA EQP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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

    <div class="container">
 <span><strong>EQUIPAMENTOS</strong></span>
  <ul class="nav nav-tabs">
    
    <li class="active"> <a href="cad_eqp.php">CADASTRO</a></li>
    <li > <a href="atua.php">ATUALIZAÇÃO</a></li>
     <li > <a href="del_eqp.php">DELETAR</a></li>
 


  </ul>
  <br>
  <form class="form" role="form" name="seachform" method="post" action="enviar_cad.php " enctype="multipart/form-data" >

   

    <div class="form-group">

       <label for="email">PATRIMONIO:</label>
      <input type="text" class="form-control" id="pt" name="pt"   required >
    </div>
     <div class="form-group">




      <label for="email">NOME TÉCNICO:</label>  
      <input type="text" class="form-control" id="tec" name="tec"  required>
    </div>
       <div class="form-group">
       <label for="email">ID DO TÉCNICO:</label>  
      <input type="text" class="form-control" id="id_tec" name="id_tec"  required>
    </div>
     
      
     <div class="form-group">

       <label for="email">NOME G.A:</label>
      <input type="text" class="form-control" id="ga" name="ga"   required >
    </div>


    



         
  



<div class="form-group">

       <label for="email">ID G.A:</label>
      <input type="text" class="form-control" id="id_ga" name="id_ga"  required  >
    </div>


<div class="form-group">

       <label for="email">BASE:</label>
      <input type="text" class="form-control" id="base" name="base"    required>
    </div>
   <label for="sel1">EQUIPAMENTO:</label>
  <select class="form-control " id="eqp" name="eqp"  >


    <option value="MAQUINA DE FUSAO">  MÁQUINA DE FUSÃO </option>
<option value="POWER METER" > POWER METER  </option>
<option value="CLIVADOR">  CLIVADOR </option>
<option value="IDENTIFICADOR DE FIBRA"> IDENTIFICADOR DE FIBRA  </option>
<option value="FONTE DE LUZ LASER"> FONTE DE LUZ LASER  </option>
<option value="BOBINA DE LANÇAMENTO DE TESTE"> BOBINA DE LANÇAMENTO DE TESTE  </option>
<option value="OTDR"> OTDR  </option>
<option value="MOTO SERRA"> MOTO SERRA  </option>
<option value="MOTO BOMBA"> MOTO BOMBA  </option>
<option value="MOTO PODA"> MOTO PODA  </option>
<option value="MAQUINA DE ESPINAR"> MÁQUINA DE ESPINAR  </option>
<option value="IMPRESSORA PORTATIL"> IMPRESSORA PORTATIL  </option>
<option value="DETECTOR DE GAS"> DETECTOR DE GÁS  </option>
<option value="CATRACA"> CATRACA  </option>


  </select>
  <label for="sel1">UF:</label>
  <select class="form-control " id="uf" name="uf"  >


    <option value="PR">  PR </option>
<option value="SC" > SC  </option>



  </select>
     <div class="form-group">

       <label for="email">MODELO:</label>
      <input type="text" class="form-control" id="modelo" name="modelo"    required>
    </div>
    <label for="email">FOTO: </label>
    <input type="file"  id="foto"  name="foto"/> 

   
    
   
 
   

 
   
     <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  
</div>




</body>
</html>

