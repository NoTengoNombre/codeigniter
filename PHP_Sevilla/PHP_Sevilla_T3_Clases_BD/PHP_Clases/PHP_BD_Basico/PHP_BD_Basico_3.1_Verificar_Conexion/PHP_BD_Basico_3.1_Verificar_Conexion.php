<!--
    @Created on : 25-nov-2016, 18:05:56
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$dwes = new mysqli();
$dwes->connect('localhost', 'root', '', 'almacen');

$error = $dwes->connect_errno;
if ($error != null) {
  echo "<p>Error $error conectado a la base de datos : $dwes->connect_error </p>";
  exit("Conexion Abortada");
} else {
  echo "Conexion con exito";
// Cambiar de base de datos
  $dwes->select_db("world");
// Liberar recursos y conexion bd
  $dwes->close();
}
?>
