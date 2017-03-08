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

$id_video = 661;
$id_usuario = 1211;
$titulo = "pelicula111";
$duracion = "10";
$estreno = "1910";
$sinopsis = "pelicula 32";
$genero = "accion1";
$tipo = 3;
$formato = "dvd1";
$enlace = "www.ejemplo1.com";
$imagen = "ver imagen1";

$consulta2 = "UPDATE peliculas SET id_video= '" . $id_video . "' , id_usuario= '" . $id_usuario . "' , titulo='" . $titulo . "' , duracion='" . $duracion . "' , estreno='" . $estreno . "' , sinopsis='" . $sinopsis . "' , genero='" . $genero . "' , tipo='" . $tipo . "' , formato='" . $formato . "' , enlace='" . $enlace . "' , imagen='" . $imagen . "' WHERE id_video= '" . $id_video . "' ;";

echo $consulta2;

$numero_de_filas2 = $db->manipulacion($consulta2);

echo '<br> Devuelve : ' . $numero_de_filas2;

echo "<br> Volcar DATOS ; ";


if ($numero_de_filas2) {
  echo "<br> inserccion correcta";
}

echo '<hr>';

$array_resultados = $db->consulta("SELECT * FROM peliculas");
Vista::show($array_resultados);









