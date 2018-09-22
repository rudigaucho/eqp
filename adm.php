<?php include "conn.php"; 
include "contas.php"; 
include "contas_sc.php"; 
session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'ADM' ))
{
  header("Location: index.html");
  exit;
  
  
}



 


?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADM EQP</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo $_SESSION["nome"]?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                      
                        <li>
                            <a href="modifica_senha.php"><i class="fa fa-fw fa-gear"></i> Trocar senha</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="Logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="cad_usu.php"><i class="fa fa-fw fa-user"></i> Usuários</a>
                    </li>
                    <li>
                        <a href="cad_eqp.php"><i class="fa fa-fw fa-briefcase"></i> Equipamentos</a>
                    </li>
                    <li>
                        <a href="consulta_historico.php"><i class="fa fa-fw fa-wrench"></i> Histórico de reparos</a>
                    </li>
                    <li>
                        <a href="pes_adm_ga.php"><i class="fa fa-fw fa-group"></i> Consulta por G.A</a>
                    </li>
                    <li>
                        <a href="pes_adm_tec.php"><i class="fa fa-fw fa-group"></i> Consulta por Técnico</a>
                    </li>
                    <li>
                        <a href="consulta_patrimonio.php"><i class="fa fa-fw fa-check"></i> Consulta Patrimonio</a>

                    </li>
                     <li>
                        <a href="cadastro_adm.php"><i class="fa fa-fw fa-check"></i> Enviar eqp almox</a>
                    </li>
                   
                   
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Estatisticas de equipamentos PR e SC</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> PARANÁ
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->



              
               
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo "$conta_tot"; ?></div>
                                        <div>TOTAL EQP!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="pesq_adm_total.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                     </a>
                                        <div class="row">
                                    <div class="col-xs-12"><br>
                                        
                                    
                                   MÁQUINA DE FUSÃO: <a   href="pesq_eqp_especifico.php?eqp=MÁQUINA DE FUSÃO&uf=PR""> <?php echo "$conta_fusao"; ?> </a> <br>
                                    POWER METER: <a   href="pesq_eqp_especifico.php?eqp=POWER METER&uf=PR""> <?php echo "$conta_power"; ?> </a> <br>
                                     CLIVADOR: <a   href="pesq_eqp_especifico.php?eqp=CLIVADOR&uf=PR""> <?php echo "$conta_clivador"; ?> </a> <br>
                                      IDENTIFICADOR DE FIBRA: <a   href="pesq_eqp_especifico.php?eqp=IDENTIFICADOR DE FIBRA&uf=PR""> <?php echo "$conta_id"; ?> </a> <br>
                                       FONTE DE LUZ: <a   href="pesq_eqp_especifico.php?eqp=FONTE DE LUZ LASER&uf=PR""> <?php echo "$conta_fonte"; ?> </a> <br>
                                        BOBINA DE LANÇAMENTO: <a   href="pesq_eqp_especifico.php?eqp=BOBINA DE LANÇAMENTO DE TESTE&uf=PR""> <?php echo "$conta_bobina"; ?> </a> <br>
                                        OTDR: <a   href="pesq_eqp_especifico.php?eqp=OTDR&uf=PR""> <?php echo "$conta_otdr"; ?> </a> <br>
                                         MOTO SERRA: <a   href="pesq_eqp_especifico.php?eqp=MOTO SERRA&uf=PR""> <?php echo "$conta_serra"; ?> </a> <br>
                                         MOTO BOMBA: <a   href="pesq_eqp_especifico.php?eqp=MOTO BOMBA&uf=PR""> <?php echo "$conta_bomba"; ?> </a> <br>
                                          MOTO PODA: <a   href="pesq_eqp_especifico.php?eqp=MOTO PODA&uf=PR""> <?php echo "$conta_poda"; ?>  </a> <br>

                                          </div><br>
                                </div>
                                    <div class="clearfix"></div>

                                </div>
                           
                        </div>
                    </div>
                           <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-cogs fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> <?php echo "$conta_campo"; ?> </div>
                                        <div>EQP EM CAMPO</div>
                                    </div>
                                </div>
                            </div>
                            <a href="pesq_adm_reparo.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                      </a>
                                     <div class="row">
                                    <div class="col-xs-12"><br>
                                        
                                    
                                   MÁQUINA DE FUSÃO: <?php echo "$conta_fusao_campo"; ?> <br>
                                    POWER METER: <?php echo "$conta_power_campo"; ?> <br>
                                     CLIVADOR: <?php echo "$conta_clivador_campo"; ?> <br>
                                      IDENTIFICADOR DE FIBRA: <?php echo "$conta_id_campo"; ?> <br>
                                       FONTE DE LUZ:<?php echo "$conta_fonte_campo"; ?> <br>
                                      BOBINA DE LANÇAMENTO:<?php echo "$conta_bobina_campo"; ?> <br>
                                        OTDR: <?php echo "$conta_otdr_campo"; ?><br>
                                         MOTO SERRA:<?php echo "$conta_serra_campo"; ?> <br>
                                         MOTO BOMBA: <?php echo "$conta_bomba_campo"; ?><br>
                                          MOTO PODA:<?php echo "$conta_poda_campo"; ?> <br>
                                          </div><br>
                                </div>
                                    <div class="clearfix"></div>
                                </div>
                          
                        </div>
                    </div>

                     <!-- /.row -->


                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-cogs fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> <?php echo "$conta_rep"; ?> </div>
                                        <div>EQP EM REPARO</div>
                                    </div>
                                </div>
                            </div>
                            <a href="pesq_adm_reparo.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                      </a>
                                     <div class="row">
                                    <div class="col-xs-12"><br>
                                        
                                    
                                   MÁQUINA DE FUSÃO: <?php echo "$conta_fusao_rep"; ?> <br>
                                    POWER METER: <?php echo "$conta_power_rep"; ?> <br>
                                     CLIVADOR: <?php echo "$conta_clivador_rep"; ?> <br>
                                      IDENTIFICADOR DE FIBRA: <?php echo "$conta_id_rep"; ?> <br>
                                       FONTE DE LUZ:<?php echo "$conta_fonte_rep"; ?> <br>
                                      BOBINA DE LANÇAMENTO:<?php echo "$conta_bobina_rep"; ?> <br>
                                        OTDR: <?php echo "$conta_otdr_rep"; ?><br>
                                         MOTO SERRA:<?php echo "$conta_serra_rep"; ?> <br>
                                         MOTO BOMBA: <?php echo "$conta_bomba_rep"; ?><br>
                                          MOTO PODA:<?php echo "$conta_poda_rep"; ?> <br>
                                          </div><br>
                                </div>
                                    <div class="clearfix"></div>
                                </div>
                          
                        </div>
                    </div>










 <div class="row">
                  
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-plane fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo "$conta_tran"; ?></div>
                                        <div>EM TRANSITO !</div>
                                    </div>
                                </div>
                            </div>
                            <a href="pesq_adm_transito.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    </a>
                                    <div class="row">
                                    <div class="col-xs-12"><br>
                                        
                                    
                                   MÁQUINA DE FUSÃO: <?php echo "$conta_fusao_tran"; ?> <br>
                                    POWER METER: <?php echo "$conta_power_tran"; ?> <br>
                                     CLIVADOR: <?php echo "$conta_clivador_tran"; ?> <br>
                                      IDENTIFICADOR DE FIBRA: <?php echo "$conta_id_tran"; ?> <br>
                                       FONTE DE LUZ:<?php echo "$conta_fonte_tran"; ?> <br>
                                       BOBINA DE LANÇAMENTO:<?php echo "$conta_bobina_tran"; ?> <br>
                                        OTDR: <?php echo "$conta_otdr_tran"; ?><br>
                                         MOTO SERRA:<?php echo "$conta_serra_tran"; ?> <br>
                                         MOTO BOMBA: <?php echo "$conta_bomba_tran"; ?><br>
                                          MOTO PODA:<?php echo "$conta_poda_tran"; ?> <br>
                                          </div><br>
                                </div>
                                    <div class="clearfix"></div>
                                </div>
                            
                        </div>

                    </div>


                </div>
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> SANTA CATARINA
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->



              
               
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo "$conta_tot_sc"; ?></div>
                                        <div>TOTAL EQP!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="pesq_adm_total.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                     </a>
                                        <div class="row">
                                    <div class="col-xs-12"><br>
                                        
                                    
                                   MÁQUINA DE FUSÃO: <a   href="pesq_eqp_especifico.php?eqp=MÁQUINA DE FUSÃO&uf=SC""> <?php echo "$conta_fusao_sc"; ?> </a> <br>
                                    POWER METER: <a   href="pesq_eqp_especifico.php?eqp=POWER METER&uf=SC""> <?php echo "$conta_power_sc"; ?> </a> <br>
                                     CLIVADOR: <a   href="pesq_eqp_especifico.php?eqp=CLIVADOR&uf=SC""> <?php echo "$conta_clivador_sc"; ?> </a> <br>
                                      IDENTIFICADOR DE FIBRA: <a   href="pesq_eqp_especifico.php?eqp=IDENTIFICADOR DE FIBRA&uf=SC""> <?php echo "$conta_id_sc"; ?> </a> <br>
                                       FONTE DE LUZ: <a   href="pesq_eqp_especifico.php?eqp=FONTE DE LUZ LASER&uf=SC""> <?php echo "$conta_fonte_sc"; ?> </a> <br>
                                        BOBINA DE LANÇAMENTO: <a   href="pesq_eqp_especifico.php?eqp=BOBINA DE LANÇAMENTO DE TESTE&uf=SC""> <?php echo "$conta_bobina_sc"; ?> </a> <br>
                                        OTDR: <a   href="pesq_eqp_especifico.php?eqp=OTDR""> <?php echo "$conta_otdr_sc"; ?> </a> <br>
                                         MOTO SERRA: <a   href="pesq_eqp_especifico.php?eqp=MOTO SERRA&uf=SC""> <?php echo "$conta_serra_sc"; ?> </a> <br>
                                         MOTO BOMBA: <a   href="pesq_eqp_especifico.php?eqp=MOTO BOMBA&uf=SC""> <?php echo "$conta_bomba_sc"; ?> </a> <br>
                                          MOTO PODA: <a   href="pesq_eqp_especifico.php?eqp=MOTO PODA&uf=SC""> <?php echo "$conta_poda_sc"; ?>  </a> <br>

                                          </div><br>
                                </div>
                                    <div class="clearfix"></div>

                                </div>
                           
                        </div>
                    </div>
                           <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-cogs fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> <?php echo "$conta_campo_sc"; ?> </div>
                                        <div>EQP EM CAMPO</div>
                                    </div>
                                </div>
                            </div>
                            <a href="pesq_adm_reparo.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                      </a>
                                     <div class="row">
                                    <div class="col-xs-12"><br>
                                        
                                    
                                   MÁQUINA DE FUSÃO: <?php echo "$conta_fusao_campo_sc"; ?> <br>
                                    POWER METER: <?php echo "$conta_power_campo_sc"; ?> <br>
                                     CLIVADOR: <?php echo "$conta_clivador_campo_sc"; ?> <br>
                                      IDENTIFICADOR DE FIBRA: <?php echo "$conta_id_campo_sc"; ?> <br>
                                       FONTE DE LUZ:<?php echo "$conta_fonte_campo_sc"; ?> <br>
                                      BOBINA DE LANÇAMENTO:<?php echo "$conta_bobina_campo_sc"; ?> <br>
                                        OTDR: <?php echo "$conta_otdr_campo_sc"; ?><br>
                                         MOTO SERRA:<?php echo "$conta_serra_campo_sc"; ?> <br>
                                         MOTO BOMBA: <?php echo "$conta_bomba_campo_sc"; ?><br>
                                          MOTO PODA:<?php echo "$conta_poda_campo_sc"; ?> <br>
                                          </div><br>
                                </div>
                                    <div class="clearfix"></div>
                                </div>
                          
                        </div>
                    </div>

                     <!-- /.row -->


                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-cogs fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"> <?php echo "$conta_rep_sc"; ?> </div>
                                        <div>EQP EM REPARO</div>
                                    </div>
                                </div>
                            </div>
                            <a href="pesq_adm_reparo.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                      </a>
                                     <div class="row">
                                    <div class="col-xs-12"><br>
                                        
                                    
                                   MÁQUINA DE FUSÃO: <?php echo "$conta_fusao_rep_sc"; ?> <br>
                                    POWER METER: <?php echo "$conta_power_rep_sc"; ?> <br>
                                     CLIVADOR: <?php echo "$conta_clivador_rep_sc"; ?> <br>
                                      IDENTIFICADOR DE FIBRA: <?php echo "$conta_id_rep_sc"; ?> <br>
                                       FONTE DE LUZ:<?php echo "$conta_fonte_rep_sc"; ?> <br>
                                      BOBINA DE LANÇAMENTO:<?php echo "$conta_bobina_rep_sc"; ?> <br>
                                        OTDR: <?php echo "$conta_otdr_rep_sc"; ?><br>
                                         MOTO SERRA:<?php echo "$conta_serra_rep_sc"; ?> <br>
                                         MOTO BOMBA: <?php echo "$conta_bomba_rep_sc"; ?><br>
                                          MOTO PODA:<?php echo "$conta_poda_rep_sc"; ?> <br>
                                          </div><br>
                                </div>
                                    <div class="clearfix"></div>
                                </div>
                          
                        </div>
                    </div>










 <div class="row">
                  
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-plane fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo "$conta_tran_sc"; ?></div>
                                        <div>EM TRANSITO !</div>
                                    </div>
                                </div>
                            </div>
                            <a href="pesq_adm_transito.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    </a>
                                    <div class="row">
                                    <div class="col-xs-12"><br>
                                        
                                    
                                   MÁQUINA DE FUSÃO: <?php echo "$conta_fusao_tran_sc"; ?> <br>
                                    POWER METER: <?php echo "$conta_power_tran_sc"; ?> <br>
                                     CLIVADOR: <?php echo "$conta_clivador_tran_sc"; ?> <br>
                                      IDENTIFICADOR DE FIBRA: <?php echo "$conta_id_tran_sc"; ?> <br>
                                       FONTE DE LUZ:<?php echo "$conta_fonte_tran_sc"; ?> <br>
                                       BOBINA DE LANÇAMENTO:<?php echo "$conta_bobina_tran_sc"; ?> <br>
                                        OTDR: <?php echo "$conta_otdr_tran_sc"; ?><br>
                                         MOTO SERRA:<?php echo "$conta_serra_tran_sc"; ?> <br>
                                         MOTO BOMBA: <?php echo "$conta_bomba_tran_sc"; ?><br>
                                          MOTO PODA:<?php echo "$conta_poda_tran_sc"; ?> <br>
                                          </div><br>
                                </div>
                                    <div class="clearfix"></div>
                                </div>
                            
                        </div>

                    </div>


                </div>
                  </div>



                <!-- /.row -->

               
              <p style="margin-right:9%; font-size: 10px;"><strong>© Copyright Serede S/A Desenvolvimento Rudinei Rossales  </strong></p>

</body>

</html>
