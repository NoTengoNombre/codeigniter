<!--
    @Created on : 25-nov-2016, 0:13:21
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$dwes = new mysqli('localhost', 'root', '', 'almacen', '3306');

$dwes->select_db('world');

$error = $dwes->connect_errno;

if ($error == null) {
  $resultado = $dwes->query("DELETE FROM city WHERE id = 0;");
  if ($resultado) {
    print "<p>Se han sacado : " . $dwes->affected_rows . " filas </p>";
  }
  if ($resultado == 0) {
    print "<p>Se han sacado : " . $dwes->affected_rows . " filas </p>";
    print "<p>No hay registros posibles</p>";
  }
//  cerrar la bd y liberar conexion
  $dwes->close();
}
?>

