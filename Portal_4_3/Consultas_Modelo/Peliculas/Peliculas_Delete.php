<!--
    @Created on : 15-ene-2017, 20:34:40
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
require_once ("DBAbstract_Practicas.php");
require_once ("Vista.php");

$db = new DBAbstract_Practicas();
$conectado = $db->conectar();


if ($conectado == 0) { // hay error
  echo '<br> No conectado';
  $db->desconectar();
}

$array_resultados = $db->consulta("SELECT * FROM peliculas");

Vista::show($array_resultados);

$id_video = 6613;

$consulta = "DELETE FROM peliculas WHERE id_video= '" . $id_video . "';";

$resultado = $db->manipulacion($consulta);

if ($resultado) {
  echo " <br> Valor es : " . $resultado;
}


Vista::show($array_resultados);









