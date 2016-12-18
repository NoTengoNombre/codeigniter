<h3>Prueba de acceso a base de datos</h3>

<?php
//Nos conectamos con MySQL
$db = new mysqli("localhost", "root", "", "test");
// Comprobamos que la conexión se ha realizado
if ($db->connect_error) {
  die("Error en la conexion : " . $db->connect_error);
}
//Ejecutamos la consulta SQL
$result = $db->query("SELECT * FROM peliculas");
?>
<table align="center" border="1"><tr>
    <th>Nombre</th>
    <th>Teléfono</th></tr>
  <?php
//Mostramos los registros
  while ($registro = $result->fetch_array()) {
    echo '<tr><td>' . $registro["titulo"] . '</td>';
    echo '<td>' . $registro["pais"] . '</td></tr>';
  }
  $result->free(); // Libera la memoria usada por el cursor
  $db->close(); // Cierra la conexión con el servidor
  ?>
</table>