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

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="icon" href="logo.png">

<script type="text/javascript">
function fnExcelReport() {
    var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
    tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';

    tab_text = tab_text + '<x:Name>Relatorio </x:Name>';

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






<strong><span>Pesquisa de equipamentos na assistência</span></strong><br><br>


<table class="table table-hover" id="myTable">
    <thead>
      <tr >
       <th>PROTOCOLO</th>
        <th>PATRIMONIO</th>
          <th>TÉCNICO</th>
        <th>EQUIPAMENTO</th>
        <th>MODELO</th>
         <th>STATUS EQP</th>
          <th>DATA ENVIO ALMOX</th>
        <th>DATA RECEBIMENTO ALMOX</th>
        <th>DATA ENTREGA ASSISTÊNCIA</th>
        <th>DATA RETORNO ASSISTÊNCIA</th>
      
       
        
        
       

      </tr>
    </thead>
  
  <?php



$data = $_POST['date'];
$data2 = $_POST['date2'];
$sql = mysql_query ("select status.protocolo,patrimonio.patrimonio,patrimonio.tecnico,patrimonio.equip,patrimonio.modelo,patrimonio.status_equip,status.data_envio_almox_cta,status.data_recebimento_almox_cta,status.data_envio_assis,data_retorno_assis from patrimonio join status on patrimonio.patrimonio = status.id_patrimonio where status_equip = 6 and data_recebimento_ga = '0000-00-00'  ORDER BY ga asc" );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );
$sql3 =  mysql_query ("select count(*)  as conta from patrimonio join status on patrimonio.patrimonio = status.id_patrimonio where status_equip = 6 and data_recebimento_ga = '0000-00-00' " );



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
  <td> <?php echo $dado ["protocolo"];  ?></td>    
 <td> <?php echo $dado ["patrimonio"];  ?></td>
  <td> <?php echo $dado ["tecnico"];  ?></td>
<td> <?php echo $dado ["equip"];  ?></td>
<td> <?php echo $dado ["modelo"];  ?></td>
<td> <?php echo $dado ["status_equip"];  ?></td>
 <td> <?php echo $dado ["data_envio_almox_cta"];  ?></td>
<td> <?php echo $dado ["data_recebimento_almox_cta"];  ?></td>
<td> <?php echo $dado ["data_envio_assis"];  ?></td>
<td> <?php echo $dado ["data_retorno_assis"];  ?></td>

 





 


<div class="modal fade" id="myModal<?php echo $dado ['id'];  ?>" role="dialog">
    <div class="modal-dialog-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">RELATÓRIO<h4>
          <p>PROTOCOLO: <strong><?php echo $dado ["id"];  ?></strong></p>
        <p>CIRCUITO: <strong><?php echo $dado ["ccto"];  ?></strong></p>
        <p>CLIENTE: <strong><?php echo $dado ["cliente"];  ?></strong></p>
        <p>CONTATO: <strong><?php echo $dado ["fone"];  ?></strong></p>
        <p>ENDEREÇO: <strong><?php echo $dado ["endereco"];  ?></strong></p>
        <p>CENTRAL: <strong><?php echo $dado ["central"];  ?></strong></p>
        <p>DATA: <strong><?php echo $dado ["data"];  ?></strong></p>

        <p>ABERTURA: <strong><?php echo $dado ["cad_por"];  ?></strong></p>
        <p>ENCERRAMENTO: <strong><?php echo $dado ["enc_por"];  ?></strong></p>
        <p>OBS: <strong><?php echo $dado ["obs"];  ?></strong></p>
        


        
          <br><h4 class="modal-title">FOTO ANTES<h4>
        
        </h4>
        <div class="modal-body">



        <?php echo "<img src='fotos/$foto_ant1' class='img-rounded' alt='' width='400' height='400'>" ?>

          <?php echo "<img src='fotos/$foto_ant2' class='img-rounded' alt='' width='400' height='400'>" ?>

          <?php echo "<img src='fotos/$foto_ant3' class='img-rounded' alt='' width='400' height='400'>" ?>

         

        <form method="post" action="busca_pendente.php">
          
            

        </div>

         <div class="modal-body">
         <h4 class="modal-title">FOTO DEPOIS<h4>

        <?php echo "<img src='fotos/$foto_dep1' class='img-rounded' alt='' width='400' height='400'>" ?>

            <?php echo "<img src='fotos/$foto_dep2' class='img-rounded' alt='' width='400' height='400'>" ?>

              <?php echo "<img src='fotos/$foto_dep3' class='img-rounded' alt='' width='400' height='400'>" ?>

   

        <form method="post" action="busca_pendente.php">
          
            

        </div>
        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>

          



          </form>
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


