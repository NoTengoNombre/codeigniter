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

$db = new DBAbstract_Practicas_A();
$db->conectar();

$conectado = $db->conectar();

$array_resultados = $db->consulta("SELECT * FROM paises");

Vista::show_A($array_resultados);

//datos
$id_paises = "18";
$id_paises2 = "8";
$pais = "Esp1";
$ciudad = "Man1";

$consulta = "UPDATE paises SET id_paises= '" . $id_paises2 . "' , pais= '" . $pais . "', ciudad= '" . $ciudad . "' WHERE id_paises='" . $id_paises . "';";

$insercion_correcta = $db->manipulacion($consulta);

echo '<hr>';
echo $consulta;
echo '<hr>';

if ($insercion_correcta) {
  echo "Inserccion correcta : " . $insercion_correcta;
} else {
  echo "Inserccion No correcta " . $insercion_correcta;
}

Vista::show_A($array_resultados);
