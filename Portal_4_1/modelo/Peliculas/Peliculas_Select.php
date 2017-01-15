<!--
    @Created on : 15-ene-2017, 18:32:08
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
require_once ("DBAbstract_Practicas.php");
require_once ('Vista.php');

$dbabs = new DBAbstract_Practicas;
$valor = $dbabs->conectar();

if ($valor) {
  echo '<br>Conectado';
}

$sql = "SELECT * FROM peliculas";

//otro es un array
//$dbabs es un objeto
$listas = $dbabs->consulta($sql);

Vista::show($listas);













