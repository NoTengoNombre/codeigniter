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

Vista::show2($array_resultados);

$id_video = 6613;
$id_usuario = 6613;
$titulo = "pelicula231";
$duracion = "120";
$estreno = "1939";
$sinopsis = "pelicula antigua33";
$genero = "accion3";
$tipo = 2;
$formato = "dvd3";
$enlace = "www.ejemplo.co3m";
$imagen = "ver ima3gen";


//funciona
$consulta = "INSERT INTO peliculas (id_video,id_usuario,titulo,duracion,estreno,sinopsis,genero,tipo,formato,enlace,imagen) VALUES ('" . $id_video . "','" . $id_usuario . "','" . $titulo . "','" . $duracion . "','" . $estreno . "','" . $sinopsis . "','" . $genero . "','" . $tipo . "','" . $formato . "','" . $enlace . "','" . $imagen . "');";

$insercion_correcta = $db->manipulacion($consulta);

echo '<hr>';

echo $consulta;

echo '<hr>';

echo $insercion_correcta;

echo '<hr>';

if ($insercion_correcta) {
  echo '<br> consulta realizada <br>';
} else {
  echo '<br> NO consulta realizada';
}

Vista::show2($array_resultados);






