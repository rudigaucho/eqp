<?php 

Include "conn.php";

session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GA' ) && ($_SESSION["acesso"] != 'GG' ) )
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
              
         
                    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVIÇOS
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="cadastro.php">Envio eqp almox</a></li>
          <li><a href="#">Confirmação retorno almox</a></li>
         
               
                
        
        </ul>
      </li>
                  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">CONSULTA
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="pesq_pendentes.php">Eqp pendentes</a></li>
          <li><a href="pesq_status.php">Eqp e status</a></li>
              <li><a href="consulta_historico.php">Historico reparos</a></li>
         
         
        </ul>
      </li>
       <li class="active"><a href="dash_cad.php">Voltar</a></li>
        

                </ul>
            </div>

        </div>
    </div>






<strong><span>Pesquisa de equipamentos vinculados ao GA</span></strong><br><br>


<table class="table table-hover" id="myTable">
    <thead>
      <tr >
       <th>PATRIMONIO</th>
        <th>TÉCNICO</th>
        <th>BASE</th>
        <th>STATUS EQP</th>
         <th>EQUIPAMENTO</th>
          <th>MODELO</th>
       
      
       
        
        
       

      </tr>
    </thead>
  
  <?php




$sql = mysql_query ("select * from patrimonio where id_ga = '".$_SESSION['id']."' order by tecnico asc" );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );
$sql3 =  mysql_query ("select count(*) as conta from patrimonio where id_ga = '".$_SESSION['id']."'" );



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
 
 <td> <?php echo $dado ["patrimonio"];  ?></td>
<td> <?php echo $dado ["tecnico"];  ?></td>
<td> <?php echo $dado ["base"];  ?></td>
<td> <?php echo $dado ["status_equip"];  ?></td>
 <td> <?php echo $dado ["equip"];  ?></td>
 <td> <?php echo $dado ["modelo"];  ?></td>


 





 


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


