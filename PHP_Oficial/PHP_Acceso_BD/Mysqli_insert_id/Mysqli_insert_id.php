<!--
    @Created on : 15-ene-2017, 17:27:01
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :

Devuelve el ID generado por una consulta en una tabla 
con una columna que tenga el atributo AUTO_INCREMENT.
 Si la última consulta no fue una sentencia INSERT o UPDATE o si la tabla modificada no tiene una columna con el atributo AUTO_INCREMENT, está función devolverá cero.

-->

<?php
$mysqli = new mysqli("localhost", "root", "", "world3");

if ($mysqli->connect_errno) {
  die("Error en la conexion " . $mysqli->connect_error);
}

$sql = "CREATE TABLE myCity LIKE City";

$mysqli->query($sql);

$query = "INSERT INTO myCity VALUES (Null,'PEPE','PP','PEPELAND','2')";

$mysqli->query($query);

printf("Nuevo registro con el %d.\n", $mysqli->insert_id);

echo '<br>';

$result = $mysqli->query("SELECT * FROM MyCity");

while ($fila = $result->fetch_array()) {
  echo '<br>' . $fila[0] . ' - ' . $fila[1] . " - " . $fila[2] . " - " . $fila[3] . " - " . $fila[4];
}


$valor = $mysqli->query("DROP TABLE myCity");

if ($valor) {
  echo '<br> si borrado';
}




$mysqli->close();
