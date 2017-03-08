<!--
    @Created on : 25-nov-2016, 18:15:40
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<?php
$dwes = new mysqli("localhost", "root", "", "world");
$error = $dwes->connect_errno;
if ($error == null) { // Si no hay error devuelve 'null'
  $resultado = $dwes->query("DELETE FROM city WHERE id = 0");
  if ($resultado) {
    print "<p>Se han borrado : " . $dwes->affected_rows . " registros </p>";
  }
  $dwes->close();
}
?>
