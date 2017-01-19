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
$id_paises = "3";

$consulta = "DELETE FROM paises WHERE id_paises= '" . $id_paises . "';";

$insercion_correcta = $db->manipulacion($consulta);

echo '<hr>';
var_dump($insercion_correcta);
echo '<hr>';
echo gettype($insercion_correcta);
echo '<hr>';
echo $consulta;
echo '<hr>';

if ($insercion_correcta > 0) {
  echo "Borrado correcto  : " . $insercion_correcta;
} else {
  echo "Borrado No correcto " . $insercion_correcta;
}

Vista::show_A($array_resultados);
