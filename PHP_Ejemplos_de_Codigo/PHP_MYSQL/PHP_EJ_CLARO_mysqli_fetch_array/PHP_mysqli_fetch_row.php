<!--
    @Created on : 15-ene-2017, 14:55:03
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       : http://www.jveweb.net/archivo/2011/07/sentencias-preparadas-de-mysql-en-php-ejemplos-orientados-a-objetos.html
-->

<?php
$mysqli = new mysqli("localhost", "root", "", "world");

if ($mysqli->connect_errno) {
  die("Error en la conexion : ") . $mysqli->connect_error;
}

$consulta = "SELECT * FROM city ORDER BY ID DESC LIMIT 50";


$resultado = $mysqli->query($consulta);

if ($resultado) {
  while ($fila = $resultado->fetch_row()) {
    echo '<pre>';
    $s = printf("%s (%s) (%s) (%s) \n", $fila[0], $fila[1], $fila[2], $fila[3]);
    echo '</pre>';
  }
//  if ($s) {
//  echo "Tiene valores";  
//  }
}

$resultado->free();
$mysqli->close();
