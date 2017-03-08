<!--
    @Created on : 25-nov-2016, 17:20:40
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$dwes = new mysqli('localhost', 'root', '', 'almacen');
$error = $dwes->connect_errno;
if ($error != null) {
  echo "<p>Error $error conectado a la base de datos : $dwes->connect_error </p>";
  $dwes->close(); // cerrar conexion - liberar recursos
  exit("Conexion Abortada");
}
$dwes->select_db("world");
$dwes->close();

