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
$id_paises = "5";
$pais = "Esp";
$ciudad = "Man";

$consulta = "INSERT INTO paises (id_paises,pais,ciudad) VALUES ('" . $id_paises . "','" . $pais . "','" . $ciudad . "');";

$insercion_correcta = $db->manipulacion($consulta);

echo '<hr>';
echo $consulta;
echo '<hr>';

if ($insercion_correcta > 0) {
  echo "Inserccion correcta : " . $insercion_correcta;
} else {
  echo "Inserccion No correcta " . $insercion_correcta;
}

Vista::show_A($array_resultados);
