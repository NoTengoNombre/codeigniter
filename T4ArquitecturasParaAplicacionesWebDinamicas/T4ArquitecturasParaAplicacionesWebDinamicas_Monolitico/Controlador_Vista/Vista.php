<!--
    @Created on : 15-dic-2016, 21:52:19
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
    <h1>Listado de Usuarios</h1>
    <table border='1'>
      <tr>
        <th>Id_Usuario</th>
        <th>Nombre Usuario</th>
        <?php
        while ($fila = $result->fetch_array()) {
          echo '<tr>';
          echo '<td>' . $fila['id_usuario'] . '</td>';
          echo '<td>' . $fila['nombre_usuario'] . '</td>';
          echo '</tr>';
        }
        ?>
    </table>
  </body>
</html>
