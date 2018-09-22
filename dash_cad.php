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
          <li><a href="consulta_en_base.php">Confirmação retorno almox</a></li>
         
               
                
        
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
         <li class="active"><a href="modifica_senha.php">Trocar senha</a></li>
      <li class="active"><a href="Logout.php">Logout</a></li>

                </ul>
            </div>

        </div>
    </div>




<div class="container-fluid">
<div class="container text-center">


<div class="panel-group " id="painel">
    <?php  



    $sql =  mysql_query ("select  count(*) as conta_pen from patrimonio  where status_equip != 2 and id_ga = '".$_SESSION['id']."' ");

if (mysql_num_rows($sql) > 0)

{





while ($dado = mysql_fetch_assoc($sql))
  {
     $conta_pen = $dado ["conta_pen"]; 
  }


}



$sql2 =  mysql_query ("select  count(*) as conta_enviada from patrimonio  where status_equip = 9 and id_ga = '".$_SESSION['id']."' ");

if (mysql_num_rows($sql2) > 0)

{





while ($dado = mysql_fetch_assoc($sql2))
  {
     $conta_enviada = $dado ["conta_enviada"]; 
  }


}

$sql3 =  mysql_query ("select  count(*) as conta_ok from patrimonio  where status_equip = 2 and id_ga = '".$_SESSION['id']."' ");

if (mysql_num_rows($sql3) > 0)

{





while ($dado = mysql_fetch_assoc($sql3))
  {
     $conta_ok = $dado ["conta_ok"]; 
  }


}



$sql4 =  mysql_query ("select  count(*) as conta_tot from patrimonio  where  id_ga = '".$_SESSION['id']."' ");

if (mysql_num_rows($sql4) > 0)

{





while ($dado = mysql_fetch_assoc($sql4))
  {
     $conta_tot = $dado ["conta_tot"]; 
  }


}



?>

    <div class="panel panel-primary col-md-4 col-md-offset-4 text-left">
     
      <div class="panel-body">ENVIADO ALMOX:    <?php echo "$conta_pen"; ?> </div>
      <div class="panel-body">PENDENTE CONFIRMAÇÃO ENTREGA: <?php echo "$conta_enviada"; ?> </div>
      <div class="panel-body">EQUIPAMENTO OK: <?php echo "$conta_ok"; ?> </div>
      <div class="panel-body">TOTAL DE EQUIPAMENTOS: <?php echo "$conta_tot"; ?> </div>
      
        
    </div>

  </div>

</div>


</div>



</body>




</html>


