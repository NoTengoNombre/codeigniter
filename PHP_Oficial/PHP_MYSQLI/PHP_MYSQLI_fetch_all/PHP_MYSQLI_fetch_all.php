<!--
    @Created on : 14-ene-2017, 17:53:17
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$mysqli = new mysqli("localhost", "root", "", "world");

if ($mysqli->connect_error) {
  echo "Error en la conexion : " . $mysqli->connect_errno;
  exit();
}

$sql = "SELECT Name FROM city ORDER BY ID ASC LIMIT 10";

$resultado = $mysqli->query($sql);

$resultado->fetch_all();


foreach ($resultado as $value) {
  echo '<br>' . $value["Name"];
}


//foreach ($resultado as $value) {
//  echo '<br>' . $value["Name"] . ' - ' . $value["CountryCode"];
//}

 






