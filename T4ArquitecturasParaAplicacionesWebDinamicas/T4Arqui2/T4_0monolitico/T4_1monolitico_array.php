<!--
    @Created on : 06-ene-2017, 13:22:30
    @Author     : RVS - N.F.N.D - Home
    @Pag        :
    @version    :
    @TODO       :
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
//  modelo - objeto - conexion
    $db = new mysqli("localhost", "root", "", "portal");
    $result = $db->query('SELECT * FROM usuarios');
    ?>
    <h1>Listado de Articulos</h1>
    <table border="1">
      <tr><th>Nombre</th>
        <th>Password</th></tr>
      <?php
      while ($fila = $result->fetch_array()) {
        echo "<tr>";
        echo "<td>" . $fila[0] . " </td>";
        echo "<td>" . $fila[1] . " </td>";
        echo "</tr>";
      }
      ?>
    </table>
    <?php
    $result->free();
    $db->close();
    ?>
  </body>
</html>
