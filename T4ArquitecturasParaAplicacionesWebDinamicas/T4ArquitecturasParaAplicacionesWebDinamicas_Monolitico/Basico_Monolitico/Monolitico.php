<!--
    @Created on : 15-dic-2016, 21:44:25
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
    $db = new mysqli('localhost', 'root', '', 'portal');
    $result = $db->query("SELECT id_usuario , nombre_usuario FROM usuarios;");
    ?>
    <h1>Listado de Usuarios</h1>
    <table border='1'>
      <tr>
        <th>id_usuario</th>
        <th>nombre usuario</th>
        <?php
        while ($fila = $result->fetch_array()) {
          echo '<tr>';
          echo '<td>' . $fila['id_usuario'] . '</td>';
          echo '<td>' . $fila['nombre_usuario'] . '</td>';
          echo '</tr>';
        }
        echo '</table>';
        $result->free();
        $db->close();
        ?>
      </tr>
    </table>
  </body>
</html>
