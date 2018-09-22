<?php include "conn.php"; 

session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'ALMOX' ))
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
              
         
           
      

         <li class="active"><a href="dash_almox.php">Voltar</a></li>
      <li class="active"><a href="Logout.php">Logout</a></li>

                </ul>
            </div>

        </div>
    </div>
<span><strong>CONSULTA EQP ENVIADO Á ASSISTÊNCIA</strong></span><br><br><br>


 

  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
        <th>PROTOCOLO</th>
        <th>PATRIMONIO</th>
        <th>TÉCNICO</th>
        <th>GA</th>
         <th>BASE</th>
        <th>STATUS EQP</th>
        <th>EQP</th>
         <th>MODELO</th>
        
        <th>PROCEDIMENTO</th>

      </tr>
    </thead>
  
  <?php




$sql = mysql_query ("select patrimonio.foto,status.protocolo,patrimonio,patrimonio.tecnico,patrimonio.ga,patrimonio.base,patrimonio.status_equip,patrimonio.equip,patrimonio.modelo from patrimonio join status on patrimonio.patrimonio = status.id_patrimonio where status_equip = 6 and data_recebimento_ga = '0000-00-00' " );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );
$sql3 =  mysql_query ("select  count(*) as conta from patrimonio where status_equip = 6" );



$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){


    if ($dado ["status_equip"] == 0){
      $dado ["status_equip"] = 'ENVIADO ALMOX';
    }
    if ($dado ["status_equip"] == 2){
      $dado ["status_equip"] = 'EQP OK';
    }
    if ($dado ["status_equip"] == 9){
      $dado ["status_equip"] = 'ENVIADO AO GA';
    }
     if ($dado ["status_equip"] == 8){
      $dado ["status_equip"] = 'RETORNO ASSISTÊNCIA';
    }
     if ($dado ["status_equip"] == 3){
      $dado ["status_equip"] = 'RECEBIDO PELO GA';
    }
     if ($dado ["status_equip"] == 6){
      $dado ["status_equip"] = 'ENVIADO Á ASSISTÊNCIA';
    }
     if ($dado ["status_equip"] == 1){
      $dado ["status_equip"] = 'RECEBIDO ALMOX';
    }
?>
    <tbody>
      <tr class="success">
 <td> <?php echo $dado ["protocolo"];  ?></td>     
<td> <?php echo $dado ["patrimonio"];  ?></td>
<td> <?php echo $dado ["tecnico"];  ?></td>
<td> <?php echo $dado ["ga"];  ?></td>
 <td> <?php echo $dado ["base"];  ?></td>
<td> <?php echo $dado ["status_equip"];  ?></td>
<td> <?php echo $dado ["equip"];  ?></td>
 <td> <?php echo $dado ["modelo"];  ?></td>

<?php $foto = $dado ["foto"];  ?>
<?php $patri = $dado ["patrimonio"];  ?>


<td> <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $dado ['protocolo'];  ?>" >Visualizar</button> </td>


<div class="modal fade" id="myModal<?php echo $dado ['protocolo'];  ?>" role="dialog">
    <div class="modal-dialog-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">RELATÓRIO<h4>
        <p>PATRIMONIO: <strong><?php echo $dado ["protocolo"];  ?></strong></p>
          <p>PATRIMONIO: <strong><?php echo $dado ["patrimonio"];  ?></strong></p>
        <p>EQUIPAMENTO: <strong><?php echo $dado ["equip"];  ?></strong></p>
        <p>MODELO: <strong><?php echo $dado ["modelo"];  ?></strong></p>
         <?php echo "<img src='fotos/$foto' class='img-rounded' alt='' width='400' height='400'>" ?>



        <!-- TESTE PARA FORM-->

  <form role="form" name="seachform" method="post" action="ret_assis.php " >
  <div class="form-group" >
 
<!--   <a href="http://zxing.appspot.com/scan?ret=http://192.168.43.31/modem/tecnico.php?codigo={CODE}">LEITOR </a> -->
 <input type="hidden"  class="form-control" name="pt" value=" <?php echo $dado ['protocolo'] ?>"  id="pt" required  >
 <input type="hidden"  class="form-control" name="m" value=" <?php echo $patri ?>"  id="m" required  >

    



    
  </div>
  <button type="submit" value="Baixar" class="btn btn-default"> <strong>RETORNO ASSISTÊNCIA</strong> </button>
  
  
</form>








         <!-- -->
        
        


       
         
        
        </h4>
        <div class="modal-body">



       

         
    
          
            

       
        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>

          



          
        </div>
      </div>
      
    </div>
  </div>
  
</div>


      </tr> 
  <?php } 
while ($dado = mysql_fetch_assoc($sql3))
  {
     $conta = $dado ["conta"]; 
  }
   }    

    ?>
  <span class="label label-primary" style="float:right; margin-right:2%;"><?php echo $conta;?></span>


    
      
      
    </div>
  </div>
  
</div>
    </tbody>
  </table>
</div>






</body>
</html>

