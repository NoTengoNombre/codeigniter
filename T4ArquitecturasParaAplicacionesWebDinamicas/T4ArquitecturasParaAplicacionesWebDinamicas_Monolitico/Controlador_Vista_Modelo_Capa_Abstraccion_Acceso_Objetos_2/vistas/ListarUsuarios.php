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
    <table>
      <?php
      foreach ($data as $fila) {
        echo '<tr>';
        echo '<td>' . $fila['id_usuario'] . '</td>';
        echo '<td>' . $fila['nombre_usuario'] . '</td>';
        echo '</tr>';
      }
      ?>
    </table>
  </body>
</html>
