<!--
    @Created on : 14-ene-2017, 20:42:44
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$mysqli = new mysqli("localhost", "root", "", "world");

if ($mysqli->connect_errno) {
  printf("Fallo la conexion : %s\n ", $mysqli->connect_error);
}

$consulta = "SELECT Name , CountryCode FROM city ORDER BY ID DESC LIMIT 20";

$resultado = $mysqli->query($consulta);

if ($resultado != null) {

  $i = 0;

  while ($obj = $resultado->fetch_object()) {
    echo '<pre>';
    printf("%s (%s)\n", $i++ . ' -', $obj->Name, $obj->CountryCode);
    echo '</pre>';
  }
}

$resultado->free();
$mysqli->close();
?>
