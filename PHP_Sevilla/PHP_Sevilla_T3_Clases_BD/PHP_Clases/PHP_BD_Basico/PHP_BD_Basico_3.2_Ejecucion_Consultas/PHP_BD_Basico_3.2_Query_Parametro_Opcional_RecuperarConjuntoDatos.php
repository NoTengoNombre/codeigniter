<!--
    @Created on : 25-nov-2016, 18:15:40
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<?php
$dwes = new mysqli("localhost", "root", "", "world");
//entero
$error = $dwes->connect_errno;
if ($error == null) { // Si no hay error devuelve 'null'
//objeto                                              Recupera datos todos juntos
  $resultado = $dwes->query("SELECT * FROM city", MYSQLI_STORE_RESULT);
  if ($resultado) {
    print "<p>Datos Recuperados : " . $dwes->affected_rows . " registros </p>";
  }
  $dwes->close();
}
