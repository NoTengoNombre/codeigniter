<!--
    @Created on : 25-nov-2016, 0:13:21
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php

@$dwes = new mysqli('localhost', 'root', '', 'world', '3306');

$error = $dwes->connect_errno;
if ($error != null) {
  echo "<p>Error $error conectando a a la base de datos : " . $dwes->connect_error . " </p>";
  exit("fin de la conexion");
} else {
  echo "<p>Sin Error</p>";
}
?>
