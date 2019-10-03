<?php


 $sql =  mysql_query ("select  count(*) as conta_rep from patrimonio  where status_equip != 2 and uf = 'PR'");

if (mysql_num_rows($sql) > 0)

{





while ($dado = mysql_fetch_assoc($sql))
  {
     $conta_rep = $dado ["conta_rep"]; 
  }


}

 $sql45 =  mysql_query ("select  count(*) as conta_campo from patrimonio  where status_equip = 2 and uf = 'PR'");

if (mysql_num_rows($sql45) > 0)

{





while ($dado = mysql_fetch_assoc($sql45))
  {
     $conta_campo = $dado ["conta_campo"]; 
  }


}



 $sql2 =  mysql_query ("select  count(*) as conta_tot from patrimonio where uf = 'PR' ");

if (mysql_num_rows($sql2) > 0)

{





while ($dado = mysql_fetch_assoc($sql2))
  {
     $conta_tot = $dado ["conta_tot"]; 
  }


}


 $sql3 =  mysql_query ("select  count(*) as conta_assis from patrimonio where status_equip = 6 and uf = 'PR' ");

if (mysql_num_rows($sql3) > 0)

{





while ($dado = mysql_fetch_assoc($sql3))
  {
     $conta_assis = $dado ["conta_assis"]; 
  }


}


 $sql4 =  mysql_query ("select  count(*) as conta_tran from patrimonio where status_equip = 0 and uf = 'PR' ");

if (mysql_num_rows($sql4) > 0)

{





while ($dado = mysql_fetch_assoc($sql4))
  {
     $conta_tran = $dado ["conta_tran"]; 
  }


}


// CONTAS PARA TOTAL DE EQUIPAMENTOS

$sql5 =  mysql_query ("select  count(*) as conta_fusao from patrimonio where equip = 'MAQUINA DE FUSAO' and uf = 'PR' ");

if (mysql_num_rows($sql5) > 0)

{





while ($dado = mysql_fetch_assoc($sql5))
  {
     $conta_fusao = $dado ["conta_fusao"]; 
  }


}

$sql6 =  mysql_query ("select  count(*) as conta_power from patrimonio where equip = 'POWER METER'  and uf = 'PR' ");

if (mysql_num_rows($sql6) > 0)

{





while ($dado = mysql_fetch_assoc($sql6))
  {
     $conta_power = $dado ["conta_power"]; 
  }


}

$sql7 =  mysql_query ("select  count(*) as conta_fonte from patrimonio where equip = 'FONTE DE LUZ LASER' and uf = 'PR' ");

if (mysql_num_rows($sql7) > 0)

{





while ($dado = mysql_fetch_assoc($sql7))
  {
     $conta_fonte = $dado ["conta_fonte"]; 
  }


}


$sql8 =  mysql_query ("select  count(*) as conta_otdr from patrimonio where equip = 'OTDR' and uf = 'PR' ");

if (mysql_num_rows($sql8) > 0)

{





while ($dado = mysql_fetch_assoc($sql8))
  {
     $conta_otdr = $dado ["conta_otdr"]; 
  }


}


$sql9 =  mysql_query ("select  count(*) as conta_clivador from patrimonio where equip = 'CLIVADOR' and uf = 'PR' ");

if (mysql_num_rows($sql9) > 0)

{





while ($dado = mysql_fetch_assoc($sql9))
  {
     $conta_clivador = $dado ["conta_clivador"]; 
  }


}


$sql10 =  mysql_query ("select  count(*) as conta_id from patrimonio where equip = 'IDENTIFICADOR DE FIBRA' and uf = 'PR' ");

if (mysql_num_rows($sql10) > 0)

{





while ($dado = mysql_fetch_assoc($sql10))
  {
     $conta_id = $dado ["conta_id"]; 
  }


}

$sql11 =  mysql_query ("select  count(*) as conta_serra from patrimonio where equip = 'MOTO SERRA' and uf = 'PR' ");

if (mysql_num_rows($sql11) > 0)

{





while ($dado = mysql_fetch_assoc($sql11))
  {
     $conta_serra = $dado ["conta_serra"]; 
  }


}

$sql12 =  mysql_query ("select  count(*) as conta_bomba from patrimonio where equip = 'MOTO BOMBA' and uf = 'PR' ");

if (mysql_num_rows($sql12) > 0)

{





while ($dado = mysql_fetch_assoc($sql12))
  {
     $conta_bomba= $dado ["conta_bomba"]; 
  }


}

$sql13 =  mysql_query ("select  count(*) as conta_poda from patrimonio where equip = 'MOTO PODA' and uf = 'PR' ");

if (mysql_num_rows($sql13) > 0)

{





while ($dado = mysql_fetch_assoc($sql13))
  {
     $conta_poda= $dado ["conta_poda"]; 
  }


}

$sql32 =  mysql_query ("select  count(*) as conta_bobina from patrimonio where equip = 'BOBINA DE LANÇAMENTO DE TESTE'  and uf = 'PR'");

if (mysql_num_rows($sql32) > 0)

{





while ($dado = mysql_fetch_assoc($sql32))
  {
     $conta_bobina= $dado ["conta_bobina"]; 
  }


}

$sql46 =  mysql_query ("select  count(*) as maquina_espinar from patrimonio where equip = 'MAQUINA DE ESPINAR'  and uf = 'PR'");

if (mysql_num_rows($sql46) > 0)

{





while ($dado = mysql_fetch_assoc($sql46))
  {
     $maquina_espinar= $dado ["maquina_espinar"]; 
  }


}

$sql47 =  mysql_query ("select  count(*) as impressora from patrimonio where equip = 'IMPRESSORA PORTATIL'  and uf = 'PR'");

if (mysql_num_rows($sql47) > 0)

{





while ($dado = mysql_fetch_assoc($sql47))
  {
     $impressora= $dado ["impressora"]; 
  }


}

$sql48 =  mysql_query ("select  count(*) as detector from patrimonio where equip = 'DETECTOR DE GAS'  and uf = 'PR'");

if (mysql_num_rows($sql48) > 0)

{





while ($dado = mysql_fetch_assoc($sql48))
  {
     $detector= $dado ["detector"]; 
  }


}

$sql58 =  mysql_query ("select  count(*) as catraca from patrimonio where equip = 'CATRACA'  and uf = 'PR'");

if (mysql_num_rows($sql58) > 0)

{





while ($dado = mysql_fetch_assoc($sql58))
  {
     $catraca= $dado ["catraca"]; 
  }


}






//             CONTAS PARA EQP EM REPARO







$sql14 =  mysql_query ("select  count(*) as conta_fusao_rep from patrimonio where equip = 'MAQUINA DE FUSAO' and status_equip != 2 and uf = 'PR' ");

if (mysql_num_rows($sql14) > 0)

{





while ($dado = mysql_fetch_assoc($sql14))
  {
     $conta_fusao_rep = $dado ["conta_fusao_rep"]; 
  }


}

$sql15 =  mysql_query ("select  count(*) as conta_power_rep from patrimonio where equip = 'POWER METER' and status_equip != 2   and uf = 'PR'");

if (mysql_num_rows($sql15) > 0)

{





while ($dado = mysql_fetch_assoc($sql15))
  {
     $conta_power_rep = $dado ["conta_power_rep"]; 
  }


}

$sql16 =  mysql_query ("select  count(*) as conta_fonte_rep from patrimonio where equip = 'FONTE DE LUZ LASER' and status_equip != 2 and uf = 'PR' ");

if (mysql_num_rows($sql16) > 0)

{





while ($dado = mysql_fetch_assoc($sql16))
  {
     $conta_fonte_rep = $dado ["conta_fonte_rep"]; 
  }


}


$sql17 =  mysql_query ("select  count(*) as conta_otdr_rep from patrimonio where equip = 'OTDR' and status_equip != 2 and uf = 'PR' ");

if (mysql_num_rows($sql17) > 0)

{





while ($dado = mysql_fetch_assoc($sql17))
  {
     $conta_otdr_rep = $dado ["conta_otdr_rep"]; 
  }


}


$sql18 =  mysql_query ("select  count(*) as conta_clivador_rep from patrimonio where equip = 'CLIVADOR' and status_equip != 2 and uf = 'PR' ");

if (mysql_num_rows($sql18) > 0)

{





while ($dado = mysql_fetch_assoc($sql18))
  {
     $conta_clivador_rep = $dado ["conta_clivador_rep"]; 
  }


}


$sql19 =  mysql_query ("select  count(*) as conta_id_rep from patrimonio where equip = 'IDENTIFICADOR DE FIBRA' and status_equip != 2 and uf = 'PR'");

if (mysql_num_rows($sql19) > 0)

{





while ($dado = mysql_fetch_assoc($sql19))
  {
     $conta_id_rep = $dado ["conta_id_rep"]; 
  }


}

$sql20 =  mysql_query ("select  count(*) as conta_serra_rep from patrimonio where equip = 'MOTO SERRA'   and status_equip != 2 and uf = 'PR' ");

if (mysql_num_rows($sql20) > 0)

{





while ($dado = mysql_fetch_assoc($sql20))
  {
     $conta_serra_rep = $dado ["conta_serra_rep"]; 
  }


}

$sql21 =  mysql_query ("select  count(*) as conta_bomba_rep from patrimonio where equip = 'MOTO BOMBA' and status_equip != 2 and uf = 'PR' " );

if (mysql_num_rows($sql21) > 0)

{





while ($dado = mysql_fetch_assoc($sql21))
  {
     $conta_bomba_rep= $dado ["conta_bomba_rep"]; 
  }


}

$sql22 =  mysql_query ("select  count(*) as conta_poda_rep from patrimonio where equip = 'MOTO PODA' and status_equip != 2 and uf = 'PR'");

if (mysql_num_rows($sql22) > 0)

{





while ($dado = mysql_fetch_assoc($sql22))
  {
     $conta_poda_rep= $dado ["conta_poda_rep"]; 
  }


}


$sql33 =  mysql_query ("select  count(*) as conta_bobina_rep from patrimonio where equip = 'BOBINA DE LANÇAMENTO DE TESTE' and status_equip != 2 and uf = 'PR'");

if (mysql_num_rows($sql33) > 0)

{





while ($dado = mysql_fetch_assoc($sql33))
  {
     $conta_bobina_rep= $dado ["conta_bobina_rep"]; 
  }


}

$sql49 =  mysql_query ("select  count(*) as maquina_espinar_rep from patrimonio where equip = 'MAQUINA DE ESPINAR' and status_equip != 2 and uf = 'PR'");

if (mysql_num_rows($sql49) > 0)

{





while ($dado = mysql_fetch_assoc($sql49))
  {
     $maquina_espinar_rep= $dado ["maquina_espinar_rep"]; 
  }


}

$sql50 =  mysql_query ("select  count(*) as impressora_rep from patrimonio where equip = 'IMPRESSORA PORTATIL' and status_equip != 2 and uf = 'PR'");

if (mysql_num_rows($sql50) > 0)

{





while ($dado = mysql_fetch_assoc($sql50))
  {
     $impressora_rep= $dado ["impressora_rep"]; 
  }


}

$sql51 =  mysql_query ("select  count(*) as detector_rep from patrimonio where equip = 'DETECTOR DE GAS' and status_equip != 2 and uf = 'PR'");

if (mysql_num_rows($sql51) > 0)

{





while ($dado = mysql_fetch_assoc($sql51))
  {
     $detector_rep= $dado ["detector_rep"]; 
  }


}

$sql59 =  mysql_query ("select  count(*) as catraca_rep from patrimonio where equip = 'CATRACA' and status_equip != 2 and uf = 'PR'");

if (mysql_num_rows($sql59) > 0)

{





while ($dado = mysql_fetch_assoc($sql59))
  {
     $catraca_rep= $dado ["catraca_rep"]; 
  }


}




//   CONSTAS EQP EM TRANSITO




$sql23 =  mysql_query ("select  count(*) as conta_fusao_tran from patrimonio where equip = 'MAQUINA DE FUSAO' and status_equip = 0 and uf = 'PR'");

if (mysql_num_rows($sql23) > 0)

{





while ($dado = mysql_fetch_assoc($sql23))
  {
     $conta_fusao_tran = $dado ["conta_fusao_tran"]; 
  }


}

$sql24 =  mysql_query ("select  count(*) as conta_power_tran from patrimonio where equip = 'POWER METER' and status_equip = 0 and uf = 'PR' ");

if (mysql_num_rows($sql24) > 0)

{





while ($dado = mysql_fetch_assoc($sql24))
  {
     $conta_power_tran = $dado ["conta_power_tran"]; 
  }


}

$sql25 =  mysql_query ("select  count(*) as conta_fonte_tran from patrimonio where equip = 'FONTE DE LUZ LASER' and status_equip = 0 and uf = 'PR' ");

if (mysql_num_rows($sql25) > 0)

{





while ($dado = mysql_fetch_assoc($sql25))
  {
     $conta_fonte_tran = $dado ["conta_fonte_tran"]; 
  }


}


$sql26 =  mysql_query ("select  count(*) as conta_otdr_tran from patrimonio where equip = 'OTDR' and status_equip = 0 and uf = 'PR'");

if (mysql_num_rows($sql26) > 0)

{





while ($dado = mysql_fetch_assoc($sql26))
  {
     $conta_otdr_tran = $dado ["conta_otdr_tran"]; 
  }


}


$sql27 =  mysql_query ("select  count(*) as conta_clivador_tran from patrimonio where equip = 'CLIVADOR' and status_equip = 0 and uf = 'PR'");

if (mysql_num_rows($sql27) > 0)

{





while ($dado = mysql_fetch_assoc($sql27))
  {
     $conta_clivador_tran = $dado ["conta_clivador_tran"]; 
  }


}


$sql28 =  mysql_query ("select  count(*) as conta_id_tran from patrimonio where equip = 'IDENTIFICADOR DE FIBRA' and status_equip = 0 and uf = 'PR' ");

if (mysql_num_rows($sql28) > 0)

{





while ($dado = mysql_fetch_assoc($sql28))
  {
     $conta_id_tran = $dado ["conta_id_tran"]; 
  }


}

$sql29 =  mysql_query ("select  count(*) as conta_serra_tran from patrimonio where equip = 'MOTO SERRA'   and status_equip = 0 and uf = 'PR'");

if (mysql_num_rows($sql29) > 0)

{





while ($dado = mysql_fetch_assoc($sql29))
  {
     $conta_serra_tran = $dado ["conta_serra_tran"]; 
  }


}

$sql30 =  mysql_query ("select  count(*) as conta_bomba_tran from patrimonio where equip = 'MOTO BOMBA' and status_equip = 0 and uf = 'PR'");

if (mysql_num_rows($sql30) > 0)

{





while ($dado = mysql_fetch_assoc($sql30))
  {
     $conta_bomba_tran= $dado ["conta_bomba_tran"]; 
  }


}

$sql31 =  mysql_query ("select  count(*) as conta_poda_tran from patrimonio where equip = 'MOTO PODA' and status_equip = 0 and uf = 'PR' ");

if (mysql_num_rows($sql31) > 0)

{





while ($dado = mysql_fetch_assoc($sql31))
  {
     $conta_poda_tran= $dado ["conta_poda_tran"]; 
  }


}

$sql34 =  mysql_query ("select  count(*) as conta_bobina_tran from patrimonio where equip = 'BOBINA DE LANÇAMENTO DE TESTE' and status_equip = 0 and uf = 'PR'");

if (mysql_num_rows($sql34) > 0)

{





while ($dado = mysql_fetch_assoc($sql34))
  {
     $conta_bobina_tran= $dado ["conta_bobina_tran"]; 
  }


}

$sql52 =  mysql_query ("select  count(*) as maquina_espinar_tran from patrimonio where equip = 'MAQUINA DE ESPINAR' and status_equip = 0 and uf = 'PR'");

if (mysql_num_rows($sql52) > 0)

{





while ($dado = mysql_fetch_assoc($sql52))
  {
     $maquina_espinar_tran= $dado ["maquina_espinar_tran"]; 
  }


}

$sql53 =  mysql_query ("select  count(*) as impressora_tran from patrimonio where equip = 'IMPRESSORA PORTATIL' and status_equip = 0 and uf = 'PR'");

if (mysql_num_rows($sql53) > 0)

{





while ($dado = mysql_fetch_assoc($sql53))
  {
     $impressora_tran= $dado ["impressora_tran"]; 
  }


}

$sql54 =  mysql_query ("select  count(*) as detector_tran from patrimonio where equip = 'DETECTOR DE GAS' and status_equip = 0 and uf = 'PR'");

if (mysql_num_rows($sql54) > 0)

{





while ($dado = mysql_fetch_assoc($sql54))
  {
     $detector_tran= $dado ["detector_tran"]; 
  }


}

$sql60 =  mysql_query ("select  count(*) as catraca_tran from patrimonio where equip = 'CATRACA' and status_equip = 0 and uf = 'PR'");

if (mysql_num_rows($sql60) > 0)

{





while ($dado = mysql_fetch_assoc($sql60))
  {
     $catraca_tran= $dado ["catraca_tran"]; 
  }


}






//   CONSTAS EQP EM CAMPO




$sql35 =  mysql_query ("select  count(*) as conta_fusao_campo from patrimonio where equip = 'MAQUINA DE FUSAO' and status_equip = 2  and uf = 'PR'");

if (mysql_num_rows($sql35) > 0)

{





while ($dado = mysql_fetch_assoc($sql35))
  {
     $conta_fusao_campo = $dado ["conta_fusao_campo"]; 
  }


}

$sql36 =  mysql_query ("select  count(*) as conta_power_campo from patrimonio where equip = 'POWER METER' and status_equip = 2  and uf = 'PR'");

if (mysql_num_rows($sql36) > 0)

{





while ($dado = mysql_fetch_assoc($sql36))
  {
     $conta_power_campo = $dado ["conta_power_campo"]; 
  }


}

$sql37 =  mysql_query ("select  count(*) as conta_fonte_campo from patrimonio where equip = 'FONTE DE LUZ LASER' and status_equip = 2  and uf = 'PR' ");

if (mysql_num_rows($sql37) > 0)

{





while ($dado = mysql_fetch_assoc($sql37))
  {
     $conta_fonte_campo = $dado ["conta_fonte_campo"]; 
  }


}


$sql38 =  mysql_query ("select  count(*) as conta_otdr_campo from patrimonio where equip = 'OTDR' and status_equip = 2 and uf = 'PR' ");

if (mysql_num_rows($sql38) > 0)

{





while ($dado = mysql_fetch_assoc($sql38))
  {
     $conta_otdr_campo = $dado ["conta_otdr_campo"]; 
  }


}


$sql39 =  mysql_query ("select  count(*) as conta_clivador_campo from patrimonio where equip = 'CLIVADOR' and status_equip = 2 and uf = 'PR' ");

if (mysql_num_rows($sql39) > 0)

{





while ($dado = mysql_fetch_assoc($sql39))
  {
     $conta_clivador_campo = $dado ["conta_clivador_campo"]; 
  }


}


$sql40 =  mysql_query ("select  count(*) as conta_id_campo from patrimonio where equip = 'IDENTIFICADOR DE FIBRA' and status_equip = 2 and uf = 'PR'");

if (mysql_num_rows($sql40) > 0)

{





while ($dado = mysql_fetch_assoc($sql40))
  {
     $conta_id_campo = $dado ["conta_id_campo"]; 
  }


}

$sql41 =  mysql_query ("select  count(*) as conta_serra_campo from patrimonio where equip = 'MOTO SERRA'   and status_equip = 2  and uf = 'PR'");

if (mysql_num_rows($sql41) > 0)

{





while ($dado = mysql_fetch_assoc($sql41))
  {
     $conta_serra_campo = $dado ["conta_serra_campo"]; 
  }


}

$sql42 =  mysql_query ("select  count(*) as conta_bomba_campo from patrimonio where equip = 'MOTO BOMBA' and status_equip = 2 and uf = 'PR' ");

if (mysql_num_rows($sql42) > 0)

{





while ($dado = mysql_fetch_assoc($sql42))
  {
     $conta_bomba_campo= $dado ["conta_bomba_campo"]; 
  }


}

$sql43 =  mysql_query ("select  count(*) as conta_poda_campo from patrimonio where equip = 'MOTO PODA' and status_equip = 2 and uf = 'PR' ");

if (mysql_num_rows($sql43) > 0)

{





while ($dado = mysql_fetch_assoc($sql43))
  {
     $conta_poda_campo= $dado ["conta_poda_campo"]; 
  }


}

$sql44 =  mysql_query ("select  count(*) as conta_bobina_campo from patrimonio where equip = 'BOBINA DE LANÇAMENTO DE TESTE' and status_equip = 2 and uf = 'PR'");

if (mysql_num_rows($sql44) > 0)

{





while ($dado = mysql_fetch_assoc($sql44))
  {
     $conta_bobina_campo= $dado ["conta_bobina_campo"]; 
  }


}


$sql55 =  mysql_query ("select  count(*) as maquina_espinar_campo from patrimonio where equip = 'MAQUINA DE ESPINAR' and status_equip = 2 and uf = 'PR'");

if (mysql_num_rows($sql55) > 0)

{





while ($dado = mysql_fetch_assoc($sql55))
  {
     $maquina_espinar_campo= $dado ["maquina_espinar_campo"]; 
  }


}


$sql56 =  mysql_query ("select  count(*) as impressora_campo from patrimonio where equip = 'IMPRESSORA PORTATIL' and status_equip = 2 and uf = 'PR'");

if (mysql_num_rows($sql56) > 0)

{





while ($dado = mysql_fetch_assoc($sql56))
  {
     $impressora_campo= $dado ["impressora_campo"]; 
  }


}

$sql57 =  mysql_query ("select  count(*) as detector_campo from patrimonio where equip = 'DETECTOR DE GAS' and status_equip = 2 and uf = 'PR'");

if (mysql_num_rows($sql57) > 0)

{





while ($dado = mysql_fetch_assoc($sql57))
  {
     $detector_campo= $dado ["detector_campo"]; 
  }



  $sql61 =  mysql_query ("select  count(*) as catraca_campo from patrimonio where equip = 'CATRACA' and status_equip = 2 and uf = 'PR'");

if (mysql_num_rows($sql61) > 0)

{





while ($dado = mysql_fetch_assoc($sql61))
  {
     $catraca_campo= $dado ["catraca_campo"]; 
  }

}
}

?>