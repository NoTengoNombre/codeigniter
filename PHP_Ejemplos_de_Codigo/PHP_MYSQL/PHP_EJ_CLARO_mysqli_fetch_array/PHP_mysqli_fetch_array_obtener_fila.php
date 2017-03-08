<!--
+    @Created on : 15-ene-2017, 14:55:03
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

$peticion = "SELECT * FROM city ORDER BY ID ASC LIMIT 10";

$resultado = $mysqli->query($peticion);


$fila = $resultado->fetch_array(MYSQLI_ASSOC);

$resultado->fetch_array(MYSQLI_ASSOC);

echo '<br>tipo de datos - ' . gettype($resultado);
echo '<br>tipo de datos - ' . gettype($fila);
echo '<hr>';

$fila = $resultado->fetch_array(MYSQLI_ASSOC);
echo '<br>' . $fila["ID"] . ' - ' . $fila["Name"];
$fila = $resultado->fetch_array(MYSQLI_ASSOC);
echo '<br>' . $fila["ID"] . ' - ' . $fila["Name"];
$fila = $resultado->fetch_array(MYSQLI_ASSOC);
echo '<br>' . $fila["ID"] . ' - ' . $fila["Name"];
$fila = $resultado->fetch_array(MYSQLI_ASSOC);
echo '<br>' . $fila["ID"] . ' - ' . $fila["Name"];

echo '<hr>';



$mysqli->close();
?>
