<!--
    @Created on : 14-ene-2017, 16:30:51
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->

<?php
$mysqli = new mysqli("localhost", "root", "", "world");

$sql = "SELECT * FROM city ORDER BY ID asc limit 3";

//Recuperar datos desde una petición simple (la clase Mysqli_result)
$resultado = $mysqli->query($sql);



if ($mysqli->connect_errno) {
  "<br>Error en la conexion a la bd : " . $mysqli->connect_error;
}
$mysqli->close();
