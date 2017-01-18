<!--
    @Created on : 17-ene-2017, 0:58:38
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
include ("DBAbstract_Practicas_A.php");
include ("Vista_A.php");

$dba = new DBAbstract_Practicas_A();
$valor = $dba->conectar();

if ($valor > 0) {
  $consulta = "SELECT * FROM paises";
  $lista = $dba->consulta($consulta);
  Vista::show_A($lista);
  $dba->desconectar();
} else {
  echo '<h1> error </h1>';
}







